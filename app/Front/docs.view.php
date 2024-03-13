<div class="
    max-w-full md:max-w-[1000px] mx-auto
    md:grid md:grid-cols-12
">
    <div class="md:block md:col-span-3 px-6 text-right sticky top-0 pt-4">
        <h1 class="text-[#4f95d1] font-bold text-2xl">Tempest</h1>

        <div class="col-span-4 mt-4 grid gap-1 border-r-2 border-[#4f95d1] px-4 py-2">
            <?php foreach ($this->chapters as $chapter) { ?>
                <a href="<?= $chapter->getUri() ?>" class="py-1 <?= $this->isCurrent($chapter) ? 'font-bold text-[#4f95d1]' : '' ?>">
                    <?= $chapter->title ?>
                </a>
            <?php } ?>
        </div>
    </div>

    <div class="px-2 md:px-6 pt-4 md:col-span-9">
        <?php if ($this->currentChapter) { ?>
            <div class="prose">
                <h1>
                    <?= $this->currentChapter->title ?>
                </h1>
                <?= $this->currentChapter->body ?>
            </div>
        <?php } ?>

        <div class="bg-[#4f95d1] text-white font-bold rounded-md p-4 flex justify-between gap-2 mt-6">
            <div>
                Tempest on <a href="https://github.com/tempestphp/tempest-framework" class="underline hover:no-underline">GitHub</a>
            </div>
            <?php if($next = $this->nextChapter()) { ?>
                <a href="<?= $next->getUri() ?>" class="underline hover:no-underline">Next: <?= $next->title ?></a>
            <?php } ?>
        </div>
    </div>
</div>