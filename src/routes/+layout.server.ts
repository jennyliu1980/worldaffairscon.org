import type { Session } from "@auth/core/types";
import type { LayoutServerLoad } from "./$types";

export const load: LayoutServerLoad = async (event) => {
	return {
		session: (await event.locals.getSession()) as Session | null
	};
};
