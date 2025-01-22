<?php
$projetos = [
    [
        [

            "titulo" => "Travelgram",
            "descricao" => "Rede social onde as pessoas mostram os registros de suas viagens pelo mundo",
            "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
            "img" => "assets/image.png"

        ],
        [

            "titulo" => "Página de receitas",
            "descricao" => "Página com o passo a passo de uma receita de cupcakes",
            "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
            "img" => "assets/image-1.png"

        ]
    ],
    [
        [

            "titulo" => "Tech News",
            "descricao" => "Homepage de um portal de notícias sobre a área de tecnologia",
            "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
            "img" => "assets/image-2.png"

        ],
        [

            "titulo" => "Refund",
            "descricao" => "Um sistema para pedido e acompanhamento de reembolso",
            "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
            "img" => "assets/Thumbnail_Project-04.png"

        ]
    ],
    [
        [

            "titulo" => "Página de Turismo",
            "descricao" => "Página com as principais informações para quem quer viajar para Busan",
            "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
            "img" => "assets/Thumbnail_Project-06.png"

        ],
        [

            "titulo" => "Zingen",
            "descricao" => "Landing page completa e responsiva de um aplicativo de Karaokê",
            "stack" => ["PHP", "HTML", "CSS", "JavaScript"],
            "img" => "assets/Thumbnail_Project-05.png"

        ]
    ]
];
?>
<main class="bg-zinc-900 flex justify-center mx-auto max-w-screen-xl pt-16 px-4">
    <div class="mx-auto max-w-screen-lg gap-3">
        <?php foreach ($projetos as $projeto) : ?>
            <div class="flex gap-x-7 mt-6 justify-around">
                <?php foreach ($projeto as $proj) : ?>
                    <div class="transition ease-in-out delay-50 border border-zinc-800 hover:border-solid hover:border-zinc-500 duration-200 flex bg-zinc-800 rounded-xl p-3">
                        <img src="<?= $proj['img'] ?>" class="min-w-64 h-44 rounded-md shadow-lg shadow-slate-800">
                        <div class="flex text-gray-200 mt-2 pl-6">
                            <div class="">
                                <h3 class="font-semibold text-lg">
                                    <?= $proj['titulo'] ?>
                                </h3>
                                <p class="h-14 w-52 flex mt-3 text-sm text-gray-400 leading-6">
                                    <?= $proj['descricao'] ?>
                                </p>
                                <div class="flex justify-start mt-12">
                                    <?php
                                    $colors = ['purple', 'teal', 'rose', 'amber'];
                                    foreach ($colors as $key => $value) {
                                    }
                                    foreach ($proj['stack'] as $pos => $language): ?>
                                        <span class="bg-<?= $colors[$pos] ?>-500 text-<?= $colors[$pos] ?>-900 rounded-xl px-2 mx-1 py-1 font-semibold text-xs">
                                            <?= $language ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>