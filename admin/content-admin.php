<?php

// Appeler le contenu HTML de la page Admin
function load_nemateria_plugin_page()
{

?>
	<main>
		<section class="pagenem">

			<!-- Barre jaune latérale -->
			<aside class="slideLeftnem">
				<div class="logo_nemateria_v"></div>
			</aside>

			<!-- Partie droite de la page, contenant les onglets et les affichages principaux -->
			<article class="slideRightnem">

				<!-- Boutons de la barre supérieure permettant l'enregistrement/suppression global(e) des modifications apportées -->
				<div class="controlsnem">
					<form>
						<button type="reset">Reset</button>
						<button type="submit">Enregistrer</button>
					</form>
				</div>

				<!-- Liste des onglets  -->
				<nav>
					<div class="tabnem">
						<button class="tablinksnem" onclick="openTab(event, 'generalNem')" id="defaultOpengen">Général</button>
						<button class="tablinksnem" onclick="openTab(event, 'serveurNem')">Serveur</button>
						<button class="tablinksnem" onclick="openTab(event, 'moissonnageNem')">Moissonnage</button>
						<button class="tablinksnem" onclick="openTab(event, 'aideNem')">Aide</button>
					</div>
				</nav>

				<!-- ONGLET PRESENTATION -->
				<section id="generalNem" class="tabnemcontent">
					<h2>Nemateria</h2>
					<h3>Logiciel de gestion de collections numérisées.</h3>
					<p>L'ensemble du projet est composé d'applications open sources disponibles gratuitement sur des dépôts Github. Elles peuvent être téléchargées et installées sur vos infrastructures.</p>
					</br>
					<p>Si vous souhaitez un accompagnement, notre équipe peut déployer la solution pour vous ou vous fournir des services en mode SaaS (Software as as Service), contactez-nous.</p>

					<hr>

					<h4>
						<a href="https://github.com/exlineo/NemateriaAdmin">Nemateria||Administration</a>
					</h4>
					<p>Application pour l'administration des collections et des notices</p>
					<h4>
						<a href="https://github.com/exlineo/NemateriaRest">Nemateria||Serveur de données</a>
					</h4>
					<p>Application pour la sauvegarde et la distribution des collections et notices.</p>
					<h4>
						<a href="https://github.com/exlineo/NemateriaOAI-PMH">Nemateria||Serveur OAI-PMH</a>
					</h4>
					<p>Serveur distribuant des données XML sur la norme OAI-PMH pour le moissonnage des notices hébergées. Il intègre la possibilité de moissonnage sur des namespaces étendus et personnalisables (au delà du Dublin Core).</p>
					<h4>
						<a href="http://nemateria.eu/app/">Nemateria||Interprétation</a>
					</h4>
					<p>Outil HTML l'interprétation et la valorisation des collections et notices.</p>
					<h4>
						<a href="https://github.com/exlineo/NemateriaXMP">Nemateria||XMP (pour suite Adobe)</a>
					</h4>
					<p>Des fichiers pour étendre les possibilités des logiciels d'édition de la suite Adobe (Bridge notamment) utile pour renseigner les métadonnées des documents.</p>
				</section>

				<!-- ONGLET PARAMETRES DU SERVEUR -->
				<section id="serveurNem" class="tabnemcontent">
					<article class="servboxnem">
						<form>
							<h3>Adresse de la base de données</h3>
							<input type="url" placeholder="url" id="urlneminput" class="nemUrl">
							<hr class="separateservbox">
							<input type="text" placeholder="Identifiant" id="idneminput"></br>
							<input type="password" placeholder="Mot de passe" id="pwneminput">
							<input type="submit" value="Submit">
							<input type="reset" value="Reset">  
							<?php submit_button () ; ?>							
						</form>
					</article>
					</br>
					</br>
					</br>
					<!-- Duplication du formulaire précédent dans le but d'ajouter d'autres serveurs -->
					<article>
						<button type="button" class="collapsibleaddserver">Ajouter une base de données</button>
						<div class="contentbddnem">
							<form>
								<h3>Adresse de la base de données</h3>
								<input type="url" placeholder="url" id="urlneminput">
								<input type="text" placeholder="Identifiant" id="idneminput"></br>
								<input type="password" placeholder="Mot de passe" id="pwneminput">
								<input type="submit" value="Submit">
								<input type="reset" value="Reset">  
								<?php submit_button () ; ?>
							</form>
							<!-- Duplication du formulaire précédent dans le but d'ajouter d'autres serveurs -->
							<div>
								<button type="button" class="collapsibleaddserver">Ajouter une base de données</button>
								<div class="contentbddnem">
									<form>
										<h3>Adresse de la base de données</h3>
										<input type="url" placeholder="url" id="urlneminput">
										<input type="text" placeholder="Identifiant" id="idneminput"></br>
										<input type="password" placeholder="Mot de passe" id="pwneminput">
										<input type="submit" value="Submit">
										<input type="reset" value="Reset">  
										<?php submit_button () ; ?>
									</form>
								</div>
									<div>
										<button type="button" class="collapsibleaddserver">Ajouter une base de données</button>
										<div class="contentbddnem">
											<form>
												<h3>Adresse de la base de données</h3>
												<input type="url" placeholder="url" id="urlneminput">
												<input type="text" placeholder="Identifiant" id="idneminput"></br>
												<input type="password" placeholder="Mot de passe" id="pwneminput">
												<input type="submit" value="Submit">
												<input type="reset" value="Reset">  
												<?php submit_button () ; ?>
											</form>
										</div>
									</div>
							</div>
						</div>
					</article>
				</section>


				<section id="moissonnageNem" class="tabnemcontent">
					<article id="leftsidemoiss">
						<h3>Base de données sélectionnée :</h3>
						<select id="bddnemselection">
							<option value="0">Base de données</option>
							<option value="1"></option>
							<option value="2"></option>
							<option value="3"></option>
							<option value="4"></option>
							<option value="5"></option>
						</select>
					</article>
					<article id="rightsidemoiss">
						<h3>Récolter les données :</h3>
						<input type="checkbox" id="nembddselected" name="bddselected">
						<label for="bddselected">Utiliser les données locales</label>
					</article>
				</section>

				<section id="aideNem" class="tabnemcontent">
					<h3>Cliquez sur les liens ci-dessous pour accéder à l'aide correspondante :</h3>
					<select id="aidenemselection">
						<option value="0">Sélectionnez une rubrique</option>
						<option value="1"></option>
						<option value="2"></option>
						<option value="3"></option>
						<option value="4"></option>
						<option value="5"></option>
					</select>
				</section>

			</article>

			<footer>

				<div class="footernem">
					<p>contact@exlineo.com | Mentions légales</p>
				</div>
			</footer>
	</main>

<?php

}

?>