<div class="row">
    <div class="col-md-9">
        <div class="white-box">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="box-title"><?= $title ?></h4>
                </div>
            </div>
            <div class="table-responsive m-t-30">
                <table class="table table-hover table-striped" id="voters">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Birthdate</th>
                            <th>Age</th>
                            <th>Civil Status</th>
                            <th>Gender</th>
                            <th>PWD</th>
                            <th>Voter Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <input type="hidden" id="state" value="<?= $state ?>">
    <div class="col-md-3">
        <div class="row colorbox-group-widget">
            <div class="col-md-12 col-sm-12 info-color-box">
                <div class="white-box">
                    <div class="media <?= $state=='non-voters' ? 'bg-warning' : 'bg-success' ?>">
                        <div class="media-body">
                            <h3 class="info-count"><?= number_format(count($resident)) ?> 
                            <span class="pull-right">
                                <?php 
                                    if($state=='voters'){
                                        echo ' <i class="icon-user-following"></i>';
                                    }else{
                                        echo ' <i class="icon-user-unfollow"></i>';
                                    }
                                    ?>
                            </span></h3>
                            <p class="info-text font-16 text-white">
                                <?= $state=='pwd' ? 'All PWD Residents' : null ?>
                                <?= $state=='senior' ? 'All Senior Citizens' : null ?>
                                <?= $state=='voters' ? 'All Voters' : null ?>
                                <?= $state=='non-voters' ? 'All Non Voters' : null ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
