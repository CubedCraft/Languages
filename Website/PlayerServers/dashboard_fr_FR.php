<?php 
$language = array(
	// Generel
	'dashboard' => 'Tableau de Bord',
	'plans' => 'Plans',
	'enter' => 'Entrer',
	'actions' => 'Actions',
	'console' => 'Console',
	'success' => 'Succès',
	'error' => 'Erreur',
	'save' => 'Sauvegarder',
	'cancel' => 'Annuler',
	'delete' => 'Supprimer',
	'successfully_updated' => 'Mise à jour avec Succès',
	'yes' => 'Oui',
	'no' => 'Non',

	// dashboard
	'server_details' => 'Détails du serveur',
	'server_status' => 'Statut du serveur',
	'connected_players' => 'Joueurs Connectés',
	'server_name_x' => '<strong>Nom du Serveur:</strong> {x}', // Don't replace {x}
	'plan_x' => '<strong>Plan du Serveur:</strong> {x}', // Don't replace {x}
	'version_x' => '<strong>Version du Serveur:</strong> {x}', // Don't replace {x}
	'motd_x' => '<strong>Motd:</strong> {x}', // Don't replace {x}
	'created_x' => '<strong>Crée:</strong> {x}', // Don't replace {x}
	'last_online_x' => '<strong>Dernière Connexion:</strong> {x}', // Don't replace {x}
	'votes_x' => '<strong>Votes:</strong> {x}', // Don't replace {x}
	'status_x' => '<strong>Statut:</strong> {x}', // Don't replace {x}
	'players_x' => '<strong>Joueurs:</strong> {x}', // Don't replace {x}
	'connect_with_x' => '<strong>Se connecter avec:</strong> {x}', // Don't replace {x}
	'change' => '(Changer)',
	
	// User management
	'server_managers' => 'Gestionnaires de Serveur',
	'server_managers_info' => 'Les utilisateurs suivants ont un accès complet pour gérer votre serveur. Comme vous êtes sur le <strong>Plan {x}</strong>, vous pouvez augmenter jusqu\'à <strong>{y}</strong> utilisateurs.',
	'user' => 'Utilisateur',
	'add_player' => 'Ajouter Joueur',
	'remove_player' => 'Retirer',
	'confirm_remove_player' => 'Êtes-vous sûr de vouloir retirer ce joueur de la gestion de votre serveur ?',
	'confirm_add_player' => 'Êtes-vous sûr de vouloir ajouter ce joueur à la gestion de votre serveur ? Tous les changements qu\'ils font ne peuvent pas être annulés !',
	'no_users_added' => 'Aucun utilisateur n\'a encore été ajouté à votre serveur.',
	'enter_username' => 'Veuillez entrer un nom d\'utilisateur valide.',
	'cant_add_self' => 'Vous ne pouvez pas vous ajouter à votre propre serveur.',
	'already_added_user' => 'Vous avez déjà ajouté cet utilisateur à votre serveur.',
	'other_user_hasnt_registered' => 'Cet utilisateur n\'est pas encore inscrit sur notre site Web ou son nom d\'utilisateur est différent de celui que vous avez saisi.',
	'user_limit_{x}' => 'Impossible d\'ajouter un autre utilisateur, vous avez atteint la limite de {x} pour votre plan.',
	'owner_only_add_managers' => 'Seul le propriétaire du serveur peut gérer les utilisateurs de ce serveur.',
	
	// Filemanager
	'filemanager' => 'Gestionnaire de Fichiers',
	'new_file' => 'Nouveau Fichier',
	'edit' => 'Modifier',
	'upload_file' => 'Charger le Fichier',
	'file_name' => 'Nom du Fichier',
	'content' => 'Contenu',
	'fileorfolder' => 'Fichier/Dossier',
	'successfully_updated' => 'Fichier mis à jour avec succès',
	'successfully_created' => 'Fichier créé avec succès',
	'successfully_deleted' => 'Fichier/Dossier supprimé avec succès',
	'confirm_deletion' => 'Confirmer la suppression',
	'delete_message' => 'Vous êtes sûr de vouloir supprimer',
	'confirm_cancel' => 'Vous êtes sûr de vouloir annuler ?',
	'cant_delete' => 'Désolé, vous ne pouvez pas supprimer le dossier des plugins.',
	'cant_rename_this' => 'Désolé, vous ne pouvez pas renommer le dossier des plugins.',
	'cannot_upload_to_plugins_folder' => 'Désolé, vous ne pouvez pas télécharger de fichiers dans le dossier des plugins.',
	'folder_not_found' => 'Impossible de trouver le dossier, assurez-vous qu\'il existe.',
	'cant_download_plugins_folder' => 'Vous ne pouvez pas télécharger le dossier des plugins pour des raisons de sécurité.',
	'none_files_or_folders' => 'Aucun fichier ou dossier n\'a été trouvé dans ce répertoire.',
	'invalid_extension' => 'L\'extension du fichier n\'est pas valide. Extensions autorisées : {x}', // Don't replace {x}
	
	// Properties
	'properties' => 'Properties',
	'properties_updated_successfully' => 'Properties mises à jour avec succès',
	'enable_command_blocks' => 'Activer les Commandes Blocs ?',
	'enable_pvp' => 'Activer le PvP ?',
	'level_type' => 'Type de Monde',
	'default' => 'Par Défaut',
	'flat' => 'Plat',
	'large_biomes' => 'Biomes Larges',
	'amplified' => 'Amplifié',
	'gamemode' => 'Mode de Jeu',
	'survival' => 'Survie',
	'creative' => 'Créatif',
	'adventure' => 'Aventure',
	'spectator' => 'Spectateur',
	'force_gamemode' => 'Forcer le Mode de Jeu ?',
	'enable_monster_spawning' => 'Activer l\'apparition des Monstres ?',
	'enable_animal_spawning' => 'Activer l\'apparition des Animaux ?',
	'enable_flight' => 'Activer le Vol ?',
	'difficulty' => 'Difficulté',
	'peaceful' => 'Paisible',
	'easy' => 'Facile',
	'normal' => 'Normal',
	'hard' => 'Difficile',
	'announce_player_achievements' => 'Annoncer les Succès ?',
	'allow_nether' => 'Activer le Nether ?',
	'generate_structures' => 'Générer les Structures ?',
	'resource_pack' => 'URL du Pack de Texture',
	'generator_settings' => 'Paramètres de Génération',
	'spawn_protection' => 'Protection du Spawn',
	
	// Plugins
	'plugins' => 'Plugins',
	'name' => 'Nom',
	'description' => 'Description',
	'install' => 'Installer',
	'remove' => 'Retirer',
	
	// Server settings
	'settings' => 'Paramètres',
	'server_motd_required' => 'Un motd est nécessaire.',
	'server_motd_max' => 'Le Motd ne peut dépasser les 32 caractères.',
);
