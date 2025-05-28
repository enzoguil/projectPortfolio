<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        Project::truncate();

        Project::create([
            'name' => 'RCUHC',
            'title' => 'RCUHC - Plugin Minecraft Java',
            'description' => 'Étant fan du mode de jeu UHC sur le jeu Minecraft, avec des amis nous avons décidé de créer un UHC à notre façon. Ce mode contient beaucoup de mécaniques uniques avec une interface qui permet une utilisation et une compréhension facile. (L\'UHC est un mode de jeu Minecraft qui consiste à être le dernier survivant).',
            'image' => 'images/rcuhc.png',
            'tasks' => '<ul>
                                <li>Créer un plugin Minecraft fonctionnel</li>
                                <li>Créer un document en ligne</li>
                                <li>Rendre le plugin simple et accessible</li>
                             </ul>',
            'steps' => '<ul>
                                <li>Réalisation du document</li>
                                <li>Création du plugin avec les fonctionnalités de base</li>
                                <li>Tester le plugin</li>
                                <li>Corriger les bugs</li>
                                <li>Simplifier l\'utilisation</li>
                             </ul>',
            'features' => '<ul>
                                    <li>Menu de création de partie</li>
                                    <li>Gestion simple des scénarios et des rôles</li>
                                    <li>Description simple de chaque rôle</li>
                                    <li>Scoreboard avec des indications sur le déroulement de la partie</li>
                                    <li>Rôles avec des pouvoirs uniques</li>
                                    <li>Évènements affectant la partie</li>
                                 </ul>',
        ]);

        Project::create([
            'name' => 'Jadenn',
            'title' => 'Jadenn - Application Web',
            'description' => 'Durant un de mes stages, j\'ai réalisé une application permettant de gérer les clients, le stock et de générer automatiquement des documents en fonction des informations du client.',
            'image' => 'images/logo_jadenn.png',
            'tasks' => '<ul>
                                <li>Créer une application fonctionnelle permettant de gérer les clients et le stock de végétaux</li>
                                <li>Générer automatiquement un document</li>
                             </ul>',
            'steps' => '<ul>
                                <li>Création de la base de données</li>
                                <li>Création de la liste des végétaux et des clients</li>
                                <li>Création de la génération de documents</li>
                                <li>Création de la gestion des images et des pictogrammes</li>
                             </ul>',
            'features' => '<ul>
                                    <li>Gestion du stock (création, suppression et modification)</li>
                                    <li>Gestion des clients (création, suppression, modification et gestion des végétaux associés)</li>
                                    <li>Génération des documents à partir des informations du client</li>
                                    <li>Gestion simple des images et des pictogrammes</li>
                                    <li>Végétaux classés par ambiance et par type</li>
                                 </ul>',
        ]);

        Project::create([
            'name' => 'RubisBOT',
            'title' => 'RubisBOT - Robot Discord',
            'description' => 'Un robot Discord pour modérer et jouer.',
            'image' => 'images/RubisBOT.png',
            'tasks' => '<ul>
                                <li>Créer un bot Discord fonctionnel</li>
                                <li>Créer une base de données relié au bot</li>
                                <li>Rendre le bot simple d\'utilisaion</li>
                             </ul>',
            'steps' => '<ul>
                                <li>Réalisation du document</li>
                                <li>Création des commandes de bases (aide/modération)</li>
                                <li>Création des commandes plus complexes relié à la base de données (jeux/niveaux/récompenses)</li>
                             </ul>',
            'features' => '<ul>
                                    <li>Commande relier à la base de données</li>
                                    <li>Commandes relier au serveur Minecraft</li>
                                    <li>Aide à la modération avec un envoie des messages à modérer dans un salon</li>
                                 </ul>',
        ]);
        Project::create([
            'name' => "LGBOT",
            'title' => "LGBOT - Robot Discord et Minecraft JavaScript/SQL (node.js/discord.js/mineflayer)",
            'description' => "C'est un Robot qui a pour but de pouvoir jouer au Loup-Garou sur Minecraft et Discord en même temps",
            'image' => 'images/LGBOT.png',
            'tasks' => "<ul>
                            <li>Gérer automatiquement une partie de Loup-Garou</li>
                            <li>Gérer la partie sur Discord et Minecraft en simultané</li>
                        </ul>",
            'steps' => "<ul>
                            <li>Création du plugin</li>
                            <li>Gestion des intéractions sur Discord et Minecraft</li>
                        </ul>",
            'features' => "<ul>
                            <li>Lancer facilement une partie de Loup-Garou sur Minecraft avec des joueurs sur discord</li>
                        </ul>",
        ]);
        Project::create([
            'name' => "PVPTeam",
            'title' => "PVPTeam - Plugin Minecraft Java (spigot/bukkit)",
            'description' => "C'est mon premier projet en Java. C'est un mode de jeu où les joueurs s'affrontent en équipe avec chaque joueur qui possède une classe. Plusieurs classes sont disponibles et ont leurs avantages et inconvénient propres à elles",
            'image' => 'images/RubisBOT.png',
            'tasks' => "<ul>
                            <li>Créer un document contenant toutes les informations sur le jeu</li>
                            <li>Créer le plugin et le rendre utilisable sur le serveur</li>
                            <li>Gérer une base de données afin d'enregistrer des statistiques pour les joueurs</li>
                        </ul>",
            'steps' => "<ul>
                            <li>Création du document</li>
                            <li>Création et mise en place de la base de données</li>
                            <li>Création du plugin</li>
                        </ul>",
            'features' => "<ul>
                            <li>2 mode de jeux avec des objectifs différents</li>
                            <li>Configuration simple de la partie</li>
                            <li>Menu pour choisir sa classe et son équipe</li>
                            <li>Personnalisation de l'inventaire pour chaque classe</li>
                        </ul>",
        ]);
        Project::create([
            'name' => "RCBungee",
            'title' => "RCBungee - Plugin Minecraft Java/SQL (bungeecordAPI)",
            'description' => "C'est un plugin Minecraft permettant de relier les différents serveurs. Il permet aussi de relier un compte Minecraft à un compte Discord et un compte du site",
            'image' => 'images/RubisBOT.png',
            'tasks' => "<ul>
                            <li>Créer un plugin permettant de gérer le lien avec les différents serveurs de l'infrastructure</li>
                            <li>Gérer une base de données avec les informations du joueur</li>
                        </ul>",
            'steps' => "<ul>
                            <li>Création du plugin</li>
                            <li>Adapter le plugin à l'infrastructure</li>
                        </ul>",
            'features' => "<ul>
                            <li>Naviguer facilement entre les serveurs</li>
                            <li>Gérer les statistiques des joueurs</li>
                        </ul>",
        ]);
        Project::create([
            'name' => "RCEconomy",
            'title' => "RCEconomy - Plugin Minecraft Java/SQL (spigot/bukkit)",
            'description' => "C'est un plugin Minecraft permettant de gérer l'économie du serveur facilement",
            'image' => 'images/RubisBOT.png',
            'tasks' => "<ul>
                            <li>Créer un plugin</li>
                            <li>Créer la base de données</li>
                        </ul>",
            'steps' => "<ul>
                            <li>Création de la base de données</li>
                            <li>Création du plugin</li>
                            <li>Ajustement pour rendre le plugin facilement utilisable et configurable</li>
                        </ul>",
            'features' => "<ul>
                            <li>Réutilisable pour la création d'autres plugins</li>
                            <li>Gestion simple de l'économie</li>
                            <li>Stockage des données dans la base de données afin d'être facilement réutilisable</li>
                        </ul>",
        ]);
        Project::create([
            'name' => "Rubis Craft",
            'title' => "Rubis Craft - Serveur Minecraft",
            'description' => "C'est un serveur Minecraft proposant une variété de jeux différents et uniques avec un site relié au serveur",
            'image' => 'images/page_compte.png',
            'tasks' => "<ul>
                            <li>Configurer un serveur Minecraft</li>
                            <li>Configurer les plugins nécessaires</li>
                            <li>Créer des plugins spécifique au serveur</li>
                            <li>Gerer les joueurs</li>
                            <li>Gérer la communication</li>
                        </ul>",
            'steps' => "<ul>
                            <li>Création et configuration des serveurs</li>
                            <li>Création des plugins spécifique au serveur</li>
                            <li>Mise en place de l'infrastructure en reliant plusieurs serveurs</li>
                            <li>Création d'une base de données liée au serveur</li>
                            <li>Creation d'un site</li>
                        </ul>",
            'features' => "<ul>
                            <li>2 mini jeux totalement différents</li>
                            <li>Une base de données liée au serveur Minecraft et Discord</li>
                            <li>Différents plugins afin d'améliorer le serveur</li>
                            <li>Site avec une connexion possible à son compte en jeu</li>
                        </ul>",
        ]);
        Project::create([
            'name' => "SmashBOT",
            'title' => "SmashBOT - Robot Discord JavaScript/SQL (node.js/discord.js)",
            'description' => "C'est un Robot destiné à la communauté du jeu Super Smash Bros. Il permet d'avoir tout type d'information sur la communauté",
            'image' => 'images/SmashBOT.png',
            'tasks' => "<ul>
                            <li>Regrouper les informations de la communauté du jeu</li>
                            <li>Permettre une création rapide et simple de tournois</li>
                            <li>Générer un classement de joueurs</li>
                            <li>Créer une base de données</li>
                        </ul>",
            'steps' => "<ul>
                            <li>Regrouper les informations dans la base de données</li>
                            <li>Créer le BOT</li>
                            <li>Relier le BOT à la base de données</li>
                        </ul>",
            'features' => "<ul>
                            <li>Avoir des statistiques sur la plupart des joueurs de la communauté</li>
                            <li>Organisé un tournoi/un match simplement</li>
                            <li>Trouver des tournois qui nous intéresse (dans notre régions par exemple)</li>
                            <li>Chat interserveur permettant un regroupement de la communauté</li>
                        </ul>",
        ]);
    }
}
