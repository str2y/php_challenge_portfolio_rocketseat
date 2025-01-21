<header class="bg-no-repeat bg-contain bg-top bg-[url('/assets/Background_Intro.png')] mx-auto max-w-screen-xl px-4 pt-40 flex justify-center">
    <div class="justify-center">
        <div class="flex justify-center">
            <img class="h-24" src="assets/GitHub.svg" alt="Foto">
        </div>
        <div class="flex justify-center text-lg text-gray-300 font-mono pt-16">
            <h1>Hello World! Meu nome é
                <span class="text-red-400">
                    Aldrei Rigoli
                </span>e sou
            </h1>
        </div>
        <div class="flex justify-center pt-3 text-6xl text-gray-300 font-bold">
            <h1>Desenvolvedor PHP</h1>
        </div>
        <div class="flex pt-2 justify-center">
            <p class="leading-6 w-3/5 pt-6 justify-center text-gray-400 text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur alias consequuntur perspiciatis natus, ex in velit, labore dolore cupiditate ad dolor. Accusamus quas eveniet ut consequuntur fugiat sequi voluptates officia!
            </p>
        </div>
        <?php $stack = ["GitHub", "PHP", "HTML", "CSS", "JavaScript"]; ?>
        <div class="flex gap-x-3 justify-center pt-24">
            <?php $colors = ['green', 'purple', 'teal', 'rose', 'amber'];
            foreach ($colors as $key => $value) {
            }
            foreach ($stack as $pos => $tech): ?>
                <span class="bg-<?= $colors[$pos] ?>-400 text-<?= $colors[$pos] ?>-900 rounded-2xl px-3 py-1 font-semibold">
                    <?= $tech ?>
                </span>
            <?php endforeach; ?>
        </div>
        <div class="pt-52">
            <div class="flex justify-center text-lg font-mono text-red-400">
                <h2>Meu Trabalho</h2>
            </div>
            <div class="flex justify-center text-2xl text-gray-200 font-bold">
                <h1>Veja os Projetos em destaque</h1>
            </div>
        </div>
    </div>
</header>