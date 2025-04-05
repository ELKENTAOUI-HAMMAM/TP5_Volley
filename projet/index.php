<!DOCTYPE html> <?php include_once './racine.php'; ?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="GET" action="controller/addEtudiant.php">
    <fieldset>
        <legend>Ajouter un nouveau étudiant</legend>
        <table border="0">
            <tr>
                <td>Nom :</td>
                <td><input type="text" name="nom" value=""/></td>
            </tr>
            <tr>
                <td>Prenom :</td>
                <td><input type="text" name="prenom" value=""/></td>
            </tr>
            <tr>
                <td>Ville</td>
                <td>
                    <select name="ville" size="1">
                        <option value="Agadir">Agadir</option>
                        <option value="Al Hoceima">Al Hoceima</option>
                        <option value="Azilal">Azilal</option>
                        <option value="Beni Mellal">Beni Mellal</option>
                        <option value="Berkane">Berkane</option>
                        <option value="Boujdour">Boujdour</option>
                        <option value="Casablanca">Casablanca</option>
                        <option value="Chefchaouen">Chefchaouen</option>
                        <option value="Dakhla">Dakhla</option>
                        <option value="El Jadida">El Jadida</option>
                        <option value="Errachidia">Errachidia</option>
                        <option value="Essaouira">Essaouira</option>
                        <option value="Fès">Fès</option>
                        <option value="Guelmim">Guelmim</option>
                        <option value="Kenitra">Kenitra</option>
                        <option value="Khemisset">Khemisset</option>
                        <option value="Khenifra">Khenifra</option>
                        <option value="Khouribga">Khouribga</option>
                        <option value="Laâyoune">Laâyoune</option>
                        <option value="Larache">Larache</option>
                        <option value="Marrakech">Marrakech</option>
                        <option value="Meknès">Meknès</option>
                        <option value="Nador">Nador</option>
                        <option value="Ouarzazate">Ouarzazate</option>
                        <option value="Oujda">Oujda</option>
                        <option value="Rabat">Rabat</option>
                        <option value="Safi">Safi</option>
                        <option value="Settat">Settat</option>
                        <option value="Salé">Salé</option>
                        <option value="Tanger">Tanger</option>
                        <option value="Taza">Taza</option>
                        <option value="Tétouan">Tétouan</option>
                    </select>
                </td>

            </tr>
            <tr>
                <td>Sexe</td>
                <td>
                    M<input type="radio" name="sexe" value="homme"/>
                    F<input type="radio" name="sexe" value="femme"/>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Envoyer"/>
                    <input type="reset" value="Effacer"/>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Ville</th>
        <th>Sexe</th>
        <th>Supprimer</th>
        <th>Modifier</th>
    </tr>
    </thead>
    <tbody> <?php include_once RACINE . '/service/EtudiantService.php';
    $es = new EtudiantService();
    foreach ($es->findAll() as $e) { ?>
        <tr>
            <td><?php echo $e->getId(); ?></td>
            <td><?php echo $e->getNom(); ?></td>
            <td><?php echo $e->getPrenom(); ?></td>
            <td><?php echo $e->getVille(); ?></td>
            <td><?php echo $e->getSexe(); ?></td>
            <td><a href="controller/deleteEtudiant.php?id= <?php echo $e->getId(); ?>">Supprimer</a></td>
            <td><a href="updateEtudiant.php">Modifier</a></td>
        </tr> <?php } ?>
    </tbody>
</table>
</body>
</html>