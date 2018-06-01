<h1 class="display-4" id="connecter">Mise a jour profil</h1>
<section id="formConnect">
<form id="connexion"   action="../../api/users" method="POST">
    <p><label>Pseudo  </label>
        <?php // var_dump($donneeProfil) ?>
        <input name="user" type="text" placeholder="Pseudo" id="user" value="<?=  $donneeProfil->user ?>"/></p>
        <input type="hidden" name="id" placeholder="0" id="confirm_mdp" value="<?=  $donneeProfil->id ?>"/>
    <p><label>Mot de passe</label>
        <input type="text" name="mdp" placeholder="mdp" id="mdp" value="<?=  $donneeProfil->mdp ?>"/></p>
    
      
    <input type="hidden" name="role" placeholder="0" id="confirm_mdp" value="0"/>
      
      <p><label>Mail</label>
          <input type="email" name="mail" placeholder="mail" id="mail" value="<?=  $donneeProfil->mail ?>"/></p>
      
    <button type="submit" class="btn btn-primary mb-2">Valider</button>
    
 
</form>
</section>