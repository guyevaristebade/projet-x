<div class="historical-wrapper">
    <section class="h-header">
         <h1>Historique</h1>
    </section>

    <section class="h-informations">
        <div>
            <p>
                La société GS Maintenance est née en 1994 suite à l'arrêt de l'activité industrielle de la société Jeumont-Schneider.
            </p>

            <p>
                Usine Jeumont Schneider à Champagne Sur Seine en 1920
                A l'origine spécialisée dans l'entretien et la maintenance des équipements Jeumont Schneider, GS Maintenance s'est développée sur la base d'offres de solutions autour de l'Entraînement Vitesse Variable.
            </p>

            <p>
                GS Maintenance est composé d'une équipe de 15 personnes (6 ingénieurs dont un doctorant en électrotechnique) spécialisée dans les applications d'électronique de puissance basse et moyenne tension en particulier les systèmes à vitesse variable complexes.
            </p>

            <figure>
                <img src="../images/Usine-Jeumont-Schneider.png" />
                <figcaption> Usine Jeumont Schneider à Champagne Sur Seine en 1920 </figcaption>
            </figure>

            <p>
                La notoriété de GS Maintenance repose sur son expertise dans de nombreux process industriels et sur sa capacité à intervenir rapidement en proposant des solutions identiques ou alternatives à celles existantes afin de faciliter la remise en exploitation de l'outil de production.
            </p>

            <p>
                GS Maintenance est actif en particulier dans le domaine du pétrole, de la métallurgie (ligne de parachèvement, fours à arc, laminoirs), des cimenteries et des machines d'imprimerie.
            </p>

            <p>
                Pour parvenir à ce résultat, GS Maintenance dispose de son personnel qualifié, d'une large connaissance des matériels électrotechniques proposés par les acteurs du marché (ABB, ALSTHOM, ALSTOM, ANSALDO, HILL GRAHAM, ROCKWELL, AUTOMATION, ROSS HILL, SCHNEIDER ELECTRIC, SIEMENS, WEG, ...) ce qui lui permet de maintenir et de moderniser les installations de ses clients.
            </p>

            <p>
                GS Maintenance a développé sous son propre label, des solutions d'automatisme et de variateurs de vitesse basse tension (AC jusqu'à 690V, 1000kW et DC 750V 1000kW) qu'il propose uniquement à ses clients dans le cadre de ses activités de maintenance.
            </p> 

            <p>
                Cette stratégie confière à GS Maintenance une autonomie et une indépendance vis-à-vis de tous les acteurs ci-dessus nommés.
            </p>       
    </section>

    <section class="cta">
        <h2>Pour toutes demande devis ou information</h2>
        <div class="cta-buttons">
            <a href="tel:+330164799404">+330164799404</a>
            <a href="mailto:gsm77@gsmaintenance.fr">gsm77@gsmaintenance.fr</a>
        </div>
    </section>


    <section class="timline-container">
        <ul class="h-timeline">
            <?php foreach($timelineDatas as $timeline): ?>
                <li class="timeline-item" style="--accent-color:#41516C">
                    <div class="date"><?php echo $timeline['date']; ?></div>
                    <div class="title"><?php echo $timeline['title']; ?></div>
                    <div class="descr"><?php echo $timeline['content']; ?></div>
                </li>
            <?php  endforeach; ?>
        </ul>
    </section>
</div>