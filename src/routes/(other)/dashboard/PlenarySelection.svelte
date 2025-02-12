<script lang="ts">
	import LargeAccordion from "$lib/components/LargeAccordion.svelte";
	import type { PageData } from "./$types";
	import PlenarySelector from "./PlenarySelector.svelte";

	export let disabled: boolean;
	export let schedule: PageData["plenarySchedule"];
	export let areUnsavedChanges: boolean;

	$: encodedPreferences = JSON.stringify(
		(schedule ?? []).flatMap((s) => s.plenaries.map(({ id }) => id))
	);
</script>

<LargeAccordion header="Plenary Selection" open={!!schedule && !disabled}>
	<input hidden name="rankedPlenaries" value={encodedPreferences} />
	{#if schedule}
		<p class="text-zinc-400 mb-6 md:mb-10 text-[0.9rem] sm:text-base">
			You can choose one plenary to attend for each time slot. Drag and
			drop to order the plenary speakers for each time slot according to
			your preference. We will try to accommodate everybody's top choice.
		</p>
		<section class="flex flex-col gap-8">
			{#each schedule as scheduleSlot}
				<div class="w-full flex flex-col">
					<div class="mb-4">
						<h3
							class="text-white text-2xl font-semibold text-center"
						>
							{scheduleSlot.startTime?.toLocaleTimeString([], {
								hour: "numeric",
								minute: "numeric"
							})} - {scheduleSlot.endTime?.toLocaleTimeString(
								[],
								{
									hour: "numeric",
									minute: "numeric"
								}
							)}
						</h3>
					</div>
					<div class="grow">
						<PlenarySelector
							on:drop={(e) => {
								areUnsavedChanges = !!e.detail;
							}}
							bind:plenaries={scheduleSlot.plenaries}
							{disabled}
						/>
					</div>
				</div>
			{/each}
		</section>
	{:else}
		<p class="text-zinc-400 text-[0.9rem] sm:text-base">
			The final plenary list has not yet been announced. We will email you
			once it is available.
		</p>
	{/if}
</LargeAccordion>
