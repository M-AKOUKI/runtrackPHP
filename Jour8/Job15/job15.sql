SELECT salles.nom AS nom_salles, etage.nom AS nom_etage
FROM salles
JOIN etage ON salles.id_etage = etage.id