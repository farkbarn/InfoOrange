<?php $val=rand(1, 10); ?>
					<div class="espacio03"></div>
					<div class="lateral"> <?php /*<!--widget-->*/ ?>
						<div class="zon_pub">
                                                        <div id="Zona_L_300x250">
								<?php if($val>5){include('zon_ads/Zona_CAT_L_300x250.html');}else{include('zon_ads/Zona_CAT_l_300x250.html');} ?>
                                                        </div>
                                                        <div id="Zona_M_300x300">
                                                                <?php include("zon_ads/Zona_CAT_M_300x300.html");?>
                                                        </div>

                                                        <div id="Zona_N_300x600">
								<?php if($val>5){include('zon_ads/Zona_CAT_N_300x600.html');}else{include('zon_ads/Zona_CAT_n_300x600.html');} ?>
                                                        </div>
                                                </div>
						<div class="side">
							<?php if (!dynamic_sidebar($nom_wid));?>
						</div>
					</div> <?php /*<!-- fin widget-->*/ ?>
					<div class="limpiar"></div>
					<div class="espacio05"></div>
					<div class="sep"></div>
					<div class="espacio05"></div>
