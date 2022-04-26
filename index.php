<!-- Descrizione:
        Stampare a schermo una decina di dischi musicali (vedi screenshot). Utilizzare: Html, CSS, VueJS, axios, PHP
    Prima Milestone:
        Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
    Seconda Milestone:
        Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
    Bonus:
        Attraverso un’altra chiamata api, filtrare gli album per genere  
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  type="img/png" href="img/loader-2.png" sizes="16x16">


    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS style -->
    <link rel="stylesheet" href="css/style.css">

    <title>PHP Dischi</title>
</head>
<body >
<section id="app">
    <!-- <?php include_once __DIR__ . '/server/data.php';?> -->
    <?php include_once __DIR__ . '/partials/header.php';?>

    <main >
        <section class="container">
            <div class="row overflow-auto align-items-center flex-nowrap">
                <div class="col-4" v-for="character in filteredCharacters">
                    <div class="card mb-2" >
                        <img :src="character.image" class="card-img-top p-2" :alt="character.name">
                        <div class="card-body">
                                <h5 class="card-title">{{character.name}}</h5>
                                <p class="card-text">{{character.species}}</p>
                        </div>
                    </div>
                </div>
                <!-- <?php foreach($characters as $character) {?>
                    <div class="col-4">
                        
                        <div class="card" style="width: 18rem;">
                            <img src="<? echo $character['image'];?>" class="card-img-top" alt="<? echo $character['name']?>">
                            <div class="card-body">
                                    <h5 class="card-title"><?php echo $character['name']?></h5>
                                    <p class="card-text"><?php echo $character['species']?></p>
                            </div>
                        </div> 
                    </div>
                <?php }?> -->
            </div>
        </section>
    </main>

    <?php include_once __DIR__ . '/partials/footer.php';?>
</section>

    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- Javascript -->
    <script type = "text/javascript" src="js/script.js"></script>

</body>
</html>