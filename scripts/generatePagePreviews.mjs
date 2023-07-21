import createManifestData from "@sveltejs/kit/create_manifest_data";
import { load_config } from "@sveltejs/kit/config";
import ts from "typescript";
import puppeteer from "puppeteer";

function shouldPreviewPage(fileName) {
	const program = ts.createProgram([fileName], {});
	const checker = program.getTypeChecker();
	const sourceFileSymbol = checker.getSymbolAtLocation(
		program.getSourceFile(fileName)
	);
	const exports = Object.fromEntries(
		checker
			.getExportsOfModule(sourceFileSymbol)
			.map((obj) => [obj.name, obj.valueDeclaration.getLastToken().kind])
	);
	return exports._renderPagePreview === ts.SyntaxKind.TrueKeyword;
}

const pagesToRender = createManifestData({
	config: await load_config()
})
	.routes.filter((r) =>
		r.leaf.universal ? shouldPreviewPage(r.leaf.universal) : false
	)
	.map((r) => ({
		name: `page-preview${r.id.replaceAll("/", "-")}`,
		path: r.id
	}));

const browser = await puppeteer.launch({
	headless: "new",
	defaultViewport: { width: 1536, height: 822 }
});

for (const { name, path } of pagesToRender) {
	const page = await browser.newPage();
	await page.goto(`http://localhost:5173${path}`);
	await page.waitForNavigation({ waitUntil: "networkidle0" });
	await page.screenshot({ path: `static/page-previews/${name}.png` });
	await page.close();
}

await browser.close();
