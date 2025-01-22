<?php
$socials = [
    ['name' => 'LinkedIn', 'href' => 'https://linkedin.com', 'src' => "ph ph-linkedin-logo", 'alt' => 'LinkedIn Logo'],
    ['name' => 'Instagram', 'href' => 'https://ig.com', 'src' => "ph ph-instagram-logo", 'alt' => 'Instagram Logo'],
    ['name' => 'GitHub', 'href' => 'https://github.com', 'src' => "ph ph-github-logo", 'alt' => 'GitHub Logo'],
    ['name' => 'E-mail', 'href' => 'a', 'src' => "ph ph-envelope-simple", 'alt' => 'Mail Logo'],
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
        <div class="mt-10">
            <?php foreach ($socials as $social): ?>
                <div class="flex justify-around">
                    <div class="transition ease-in-out delay-50 border border-zinc-800 hover:border-solid hover:border-sky-500 hover:decoration-solid hover:text-sky-500 duration-200 text-3xl text-zinc-400 duration-200 h-20 mt-5 bg-zinc-800 rounded-xl w-5/6">
                        <div class="flex justify-end mt-6 mx-5">
                            <i class="text-2xl text-sky-600 ph ph-arrow-up-right"></i>
                        </div>
                        <div class="-mt-8 mx-5">
                            <a href="<?= $social['href'] ?>" target="_blank">
                                <i class="<?= $social['src'] ?>"></i>
                            </a>
                            <div class="flex mx-16 -mt-8 text-gray-400 text-base">
                                <?= $social['name'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</footer>