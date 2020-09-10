
@extends('layouts.app')
@section('content')
    <!-- Start your project here-->
    <div class="content">
           
                <!-- Jumbotron -->
        <div class="card card-image" style="background-image: url({{ asset('data_file/reasonsAirdropsFlop.jpeg')}});">
            

          <div class="text-white text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5">
        
              <!-- Content -->
              
              <h2 class="card-title h2 my-4 py-2">Welcome to {{ config('app.name') }}</h2>
              <p class="mb-4 pb-2 px-md-5 mx-md-5">Welcome to {{ config('app.name') }}.biz, a free source that presents the world’s most current and legitimate cryptocurrency airdrops. We verify and aggregate airdrops and bounties daily to bring you the most recent and profitable earning opportunities. Choose an airdrop and follow the instructions provided to claim free crypto tokens, or vote for your favorite projects!</p>
              
            </div>
          </div>
        </div>
        <!-- Jumbotron -->
        
        @include('includes.corsel')
        <hr>
        <div class="container-fluid">
            <h3 class=" h4 my-4 py-2 ">Latest Airdrop</h3>
            
                
                <div class="row row-cols-1 row-cols-md-2">
                  @foreach($postal as $postall)  
                  <div class="col mb-4">
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
                                echo "<span class='badge badge-danger'>Ended</span>";
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
                                            echo "<i class='fab fa-telegram-plane pr-2' aria-hidden='true'></i>";
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
                  @endforeach
                </div>
                {{ $postal->links('vendor.pagination.bootstrap-4') }}
            
            <hr>

            <h3 class=" h4 my-4 py-2 ">Mistery Value Airdrop</h3>
            
                
                <div class="row row-cols-1 row-cols-md-2">
                  @foreach($big as $postall)  
                  <div class="col mb-4">
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
                                            echo "<i class='fab fa-telegram-plane pr-2' aria-hidden='true'></i>";
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
                  @endforeach
                </div>
                {{ $big->links('vendor.pagination.bootstrap-4') }}
            
            <hr>
        </div>
        <div class=" d-flex flex-row justify-content-center mb-4">

            <!-- Form -->
            <form class="form-inline justify-content-center">
              <input type="email" class="form-control" placeholder="Subscribe">
              <button class="btn btn-primary btn-sm">submit</button>
            </form>
            <!-- Form -->
        </div>
        
    </div>
    <!-- End your project here-->
    
@endsection