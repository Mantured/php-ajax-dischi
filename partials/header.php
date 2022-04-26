<!-- <?php echo 'sono un header'?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <section id=nav-header>
            <div class="container-fluid h-100">
                <div class="row justify-content-between h-100">
                    <div class="col-3 h-100">
                        <img class="img-fluid" src="img/Rick-&-morty-logo.jpg" alt="Rick and morty logo">
                    </div>
                    <div class="col-3 align-self-center">
                        <a class="text-decoration-none" href="https://www.youtube.com/watch?v=_x83ExXHRr8"> Rick and Morty: The Story So Far</a>
                        <select class="" @change="filterCharactersBySpecies" v-model="selectedSpecies">
                            <option value ='all'>All</option>
                            <option :value="kind.toLowerCase()" v-for="kind in species">
                                {{kind}}
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
    </header>
</body>
</html>