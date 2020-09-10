        <coingecko-coin-price-marquee-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" color="ffff"  locale="id"></coingecko-coin-price-marquee-widget>
        <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2 mb-0" data-ride="carousel">
          <div class="carousel-inner v-2" role="listbox">
            @foreach($posta as $postall)
            <?php if ($postall->id === 1){ ?>
                <div class="carousel-item active">
            <?php }else{ ?>
                <div class="carousel-item">
            <?php } ?>
            
            
              <div class="col-12 col-md-4">
                      <a href="{{url('/'.$postall->slug)}}" class="text-dark">
                    <!-- Card -->
                    <div class="card promoting-card">
                        
                        <div class="card-body d-flex flex-row">
                        <!-- Avatar -->
                            <img src="{{url('/data_file/'.$postall->images)}}" class="rounded-circle mr-3" height="100px" width="100px" alt="avatar">
                        
                            <!-- Content -->
                            <div>
                        <p class="justify-content-end mb-0">
                        <?php 
                            if (empty($postall->status)) {
                                echo "<span class='badge badge-s
                                danger'>Ended</span>";
                            }else {
                                echo "<span class='badge badge-success'>Running</span>";
                            }
                        ?>
                        </p>
                              <!-- Title -->
                              
                              <h4 class="card-title font-weight-bold mb-2 mt-2">{{$postall->name}}</h4>
                              <!-- Subtitle -->
                              
                                <p class="card-text mb-0">
                                   @php 
                                        if (empty($postall->kyc)) {
                                         
                                        }else {
                                            echo "<i class='fa fa-id-card pr-2' aria-hidden='true'></i>";
                                        }
                                        if (empty($postall->fb)) {
                                            
                                        }else {
                                            echo "<i class='fab fa-facebook-f pr-2'></i>";
                                        }
                                        if (empty($postall->email)) {
                                            
                                        }else {
                                            echo "<i class='fas fa-envelope pr-2'></i>";
                                        }
                                        if (empty($postall->tw)) {
                                            
                                        }else {
                                            echo "<i class='fab fa-twitter pr-2'></i>";
                                        }
                                        if (empty($postall->tg)) {
                                            
                                        }else {
                                            echo "<i class='fa fa-telegram pr-2' aria-hidden='true'></i>";
                                        }
                                        if (empty($postall->discord)) {
                                            
                                        }else {
                                            echo "<i class='fab fa-discord pr-2'></i>";
                                        }
                                        if (empty($postall->medium)) {
                                            
                                        }else {
                                            echo "<i class='fa fa-medium pr-2' aria-hidden='true'></i>";
                                        }
                                        if (empty($postall->phone)) {
                                            
                                        }else {
                                            echo " <i class='fa fa-phone pr-2' aria-hidden='true'></i>";
                                        }
                                        if (empty($postall->reddit)) {
                                            
                                        }else {
                                            echo "<i class='fa fa-reddit pr-2' aria-hidden='true'></i>";
                                        }
                                        if (empty($postall->youtube)) {
                                            
                                        }else {
                                            echo "<i class='fa fa-youtube-play pr-2' aria-hidden='true'></i>";
                                        }
                                @endphp        
                                </p>
                              <p class="card-text">
                                  <i class="fa fa-money-bill pr-2"></i> ${{$postall->est_value}}
                                  </p>
                        
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                      </a>

              </div>
            </div>
            @endforeach
          </div>
        </div>
