<div class="card-new-referentiel">
    <div class="left-part">
        <div class="flex-card">
            <?php foreach($referentiels as $ref) :
                ?>
            <div class="card-ref p-15">
                <div class="mb-ref-15"><strong>...</strong></div>
                <div class="d-flex-align-items-center-flex-d-column" style="height: 100%;">
                    <div class="img-referentiel"><img style="height:100%;" class="img-referentiel" src="/projet/public/images/classe.jpg" alt=""></div>
                    <div class="mt-10"><?=$ref['libelle']?></div>
                    <div class="color-success mt-10"><?=$ref['etat']?></div>
                </div>
            </div>
            <?php endforeach ?> 
        
        </div>
    </div>
    <div class="right-part">
        <div class="card-right p-15">
            <h1 style="font-size: 1.3rem;">Nouveau Référentiel</h1>
            <div class="style-libelle mt-ref-20">
                <span class="user-1"><i class="far fa-user"></i></span>
                <label>Libelle</label>
                <input type="text" class="form-control-ref mt-10" placeholder="Entrer le libelle">
            </div>
            <div class="style-libelle mt-ref-20">
                <span class="user-1"><i class="far fa-user"></i></span>
                <label>Description</label>
                <input type="text" class="form-control-ref mt-ref-10" placeholder="Entrer la description">
            </div>
            <div class="mt-20 d-flex-jc-center">
                <button class="btn-ref btn-success">Enregistrer</button>
            </div>
        </div>
    </div>
</div>