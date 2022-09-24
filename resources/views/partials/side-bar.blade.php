<aside>
    <div class="mask">
        <div class="puos"></div>
        <div class="profil"></div>
        <div class="nom">EZOULA Sama</div>
        <div class="buton">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AdminModal"><span><i class="fa-solid fa-circle-plus"></i></span> ajouter</button>
        
                <div class="modal fade" id="AdminModal" tabindex="-1" aria-labelledby="AdminModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="AdminModalLabel">Mon compte</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="row">
                            <div class="col">
                                <label for="recipient-name" class="col-form-label float-start">Nom:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col">  
                                <label for="recipient-name" class="col-form-label float-start">Prénom:</label>
                                <input type="text" class="form-control" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="recipient-name" class="col-form-label float-start">Email:</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="col">  
                                <label for="recipient-name" class="col-form-label float-start">Téléphone:</label>
                                <input type="tel" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="recipient-name" class="col-form-label float-start">Ancien mot de passe:</label>
                                <input type="password" class="form-control" id="recipient-name">
                            </div>
                            <div class="col">
                                <label for="recipient-name" class="col-form-label float-start">Nouveau mot de passe:</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="recipient-name" class="col-form-label float-start">Modifier ma photo:</label>
                                <input type="file" class="form-control" id="recipient-name">
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Enrégistrer</button>
                    </div>
                </div>
        </div>
        </div>
        </div>
        <div class="boutto">
            <div class="adminn"><a href="{{route('acheteurs')}}"><span><i class="fa-solid fa-users"></i></span> Inscrits</a></div>
            <div class="adminn"><a href="{{route('vendeurs')}}"><span><i class="fa-solid fa-user-tie"></i></span> Demandes</a></div>
            <div class="adminn"><a href="{{route('domaines')}}"><span><i class="fa-solid fa-mountain-sun"></i></span>Domaines</a></div>
        </div>
    </div>
</aside>