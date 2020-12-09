<?php function identity($age = 18, $gender = 'Femme')
{
    if (($age >= 18) && ($gender == 'Homme')) 
    {
        $identity = 'Vous êtes un homme et vous êtes majeur.';
    } elseif (($age <= 18) && ($gender == 'Homme')) 
    {
        $identity = 'Vous êtes un homme et vous êtes mineur.';
    } elseif (($age >= 18) && ($gender == 'Femme')) 
    {
        $identity = 'Vous êtes une femme et vous êtes majeure.';
    } elseif (($age <= 18) && ($gender == 'Femme')) 
    {
        $identity = 'Vous êtes une femme et vous êtes mineure.';
    }
    return $identity;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 7 Partie 4</title>
</head>
<body>
    <h1>Exercice 7 partie 4</h1>
    <p><?= identity() ?></p>
</body>
</html>