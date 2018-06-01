<h1 class="display-4" id="connecter">Inscrivez-vous ici</h1>
<section id="formConnect">
<form id="connexion"   action="api/users" method="POST">
    <p><label>Pseudo  </label>
        <input name="user" type="text" placeholder="Pseudo" id="user"/></p>
    
    <p><label>Mot de passe</label>
        <input type="password" name="mdp" placeholder="mdp" id="mdp"/></p>
    
      
    <input type="hidden" name="role" placeholder="0" id="confirm_mdp" value="0"/>
      
      <p><label>Mail</label>
          <input type="email" name="mail" placeholder="mail" id="mail"/></p>
      
    <button type="submit" class="btn btn-primary mb-2">Valider</button>
    
 
</form>
</section>