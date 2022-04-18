<?php
    include('../../koneksi.php');
    include('../../admin/functions/HeroFunction.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css" />

    <title>Dea Mini Games</title>
</head>

<body>

    <?php
    
        $heroes = getHero();
        $items = array();
        foreach($heroes as $hero) {
        $items[] = $hero['name'];
        }
    ?>
    <div id="app">
        <div class="summary">
            <h1 class="title">MATCH RESULT</h1>
            <br />
            <h1 id="inGame"></h1>
            <h3 id="result"></h3>
        </div>
        <div class="games">
            <?php foreach($heroes as $hero) {?>
            
            <div class="option" onclick="pickOption('<?=$hero['name']?>', '<?=$hero['attack']?>', '<?=$hero['health']?>', '<?=$hero['picture']?>')"><?=$hero['name']?><img src="<?=$hero['picture']?>" alt=""></div>
            <?php }?>
        </div>
    </div>

    <script>
        class Start {
            constructor() {
                this.playerName = "Player"
                this.botName = "Deabot"
                this.playerOption;
                this.botOption;
                this.healthOption;
                this.attackOption;
                this.pathOption;
                this.winner = ""
            }

            get getBotOption() {
                return this.botOption;
            }

            set setBotOption(option) {
                this.botOption = option;
            }

            get getPlayerOption() {
                return this.playerOption
            }

            set setPlayerOption(option) {
                this.playerOption = option;
            }

            get getHealthOption() {
                return this.healthOption;
            }

            set setHealthOption(option) {
                this.healthOption = option;
            }

            get getAttackOption() {
                return this.attackOption;
            }

            set setAttackOption(option) {
                this.attackOption = option;
            }

            get getPathOption() {
                return this.pathOption;
            }

            set setPathOption(option) {
                this.pathOption = option;
            }
            
            botBrain() {
                const heroName = <?php echo json_encode($items); ?>;
                const bot = heroName[Math.floor(Math.random() * heroName.length)];
                // console.log(bot);
                return bot;
            }

            winCalculation() {
                var bot = this.botOption;
                console.log(bot);
                const healthBot = <?php
                    $heroes = getHeroByName('miya');
                    $health = $heroes['health'];
                    echo json_encode($health); 
                    ?>;
                console.log("health : ",healthBot);

                const attackBot = <?php
                        $heroes = getHeroByName('miya');
                        $attack = $heroes['attack'];
                        echo json_encode($attack); 
                        ?>;
                console.log("attack : ",attackBot);
                console.log("attackPlayer : ",this.attackOption);
                console.log("healthPlayer : ",this.healthOption);
                if (this.attackOption > attackBot) {
                    return this.winner = this.playerName
                } 
                if (attackBot > this.attackOption) {
                    return this.winner = this.botName
                } 
            }

            matchResult() {
                if (this.winner != "SERI") {
                    return `${this.winner} MENANG!`;
                } else {
                    return `WAAA ${this.winner}, GAK ADA YG MENANG 🤪`;
                }
            }
        }

        function pickOption(name, attack, health, path) {
            
            const heroName = <?php echo json_encode($heroes); ?>;
                console.log(heroName);
            const start = new Start();
            start.setPlayerOption = name;
            start.setAttackOption = attack;
            start.setHealthOption = health;
            start.setPathOption = path;
            start.setBotOption = start.botBrain();

            console.log('admin/page/hero/'+path);
            // console.log(attack, health)
            start.winCalculation();

            const inGame = document.getElementById("inGame");
            const result = document.getElementById("result");

            inGame.textContent = "..."
            result.textContent = "..."

            setTimeout(() => {
                inGame.textContent = `${start.getPlayerOption} VS ${start.getBotOption}`
                result.textContent = start.matchResult();
            }, 1500);

        }
    </script>
</body>

</html>