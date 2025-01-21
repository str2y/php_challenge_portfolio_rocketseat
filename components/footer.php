<?php
$socials = [
    ['name' => 'LinkedIn', 'href' => 'https://linkedin.com', 'src' => 'assets/socials/linkedin.png', 'alt' => 'LinkedIn Logo'],
    ['name' => 'Facebook', 'href' => 'https://fb.com', 'src' => 'assets/socials/facebook.png', 'alt' => 'Facebook Logo'],
    ['name' => 'YouTube', 'href' => 'https://youtu.be', 'src' => 'assets/socials/youtube.png', 'alt' => 'YouTube Logo'],
    ['name' => 'Twitter', 'href' => 'https://x.com', 'src' => 'assets/socials/twitter.png', 'alt' => 'Twitter Logo'],
];
?>
<footer class="bg-no-repeat bg-contain bg-bottom bg-[url('/assets/Background_Contacts.png')] flex justify-center mx-auto max-w-screen-xl pt-72 px-4">
    <div class="justify-center mb-52">
        <div class="flex justify-center">
            <h2 class="text-purple-400 text-xl font-mono">Contato</h2>
        </div>
        <div class="flex justify-center mt-2">
            <h1 class="text-3xl text-gray-200 font-bold">Gostou do meu trabalho?</h1>
        </div>
        <div class="flex justify-center mt-3">
            <span class="text-gray-300 text-lg font-mono">
                Entre em contato ou acompanhe minhas redes sociais!
            </span>
        </div>
        <div class="mt-8">
            <?php foreach ($socials as $social): ?>
                <div class="flex justify-around">
                    <div class="transition ease-in-out delay-50 border-none border border-zinc-800 hover:border-solid hover:border-sky-500 duration-200 h-20 mt-5 bg-zinc-800 rounded-xl w-5/6">
                        <div class="flex justify-end mt-5 mx-5">
                            <img src="assets/React.svg" alt="asdf">
                        </div>
                        <div class="-mt-9 mx-4">
                            <a href="<?= $social['href'] ?>" target="_blank">
                                <img class="h-10" src="<?= $social['src'] ?>" alt="<? $social['alt'] ?>">
                            </a>
                            <div class="flex mx-16 -mt-8 text-gray-400 font-semibold">
                                <?= $social['name'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</footer>