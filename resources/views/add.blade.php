@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif
    <form action="/add" method="post" enctype="multipart/form-data">
    @csrf
        <button type="submit" class="btn btn-sm btn-primary">Save</button>
        <a href="" class="btn btn-sm ">Cencel</a>
    
        <div class="row justify-content-center">
            
                <div class="col-md-6 mb-5">
                    <div class="card card-body">
                        <h5 class="h5 text-center">Airdrop Information form :</h5>
                            
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="name" name="name" >
                                <label for="name">Airdrop Name</label>
                            </div>
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="link" name="link">
                                <label for="link">Airdrop Link</label>
                            </div>
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="est_value" name="est_value">
                                <label for="est_value">Est value</label>
                            </div>
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="platfrom" name="platfrom">
                                <label for="platfrom">Platfrom</label>
                            </div>
                            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                              <input placeholder="12-12-2012" type="text" id="example" class="form-control" name="end_date">
                              <label for="example">Airdrop End</label>
                             
                            </div>
                            <div class="form-group shadow-textarea">
                              <label for="exampleFormControlTextarea6">Description</label>
                              <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..." name="description"></textarea>
                            </div>
                            <h5>Images</h5>
                            <div class="md-form">
                              <div class="file-field">
                                <div class="btn btn-primary btn-sm float-left">
                                  <span>Choose file</span>
                                  <input type="file" name="images">
                                </div>
                                <div class="file-path-wrapper">
                                  <input class="file-path validate" type="text" name="images" placeholder="Upload your file">
                                </div>
                              </div>
                            </div>
     
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    
                    <div class="card card-body">
                        <h5 class="h5 text-center">Overview form :</h5>
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="website" name="website" value="https://">
                                <label for="website">Website</label>
                            </div>
                            
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="ico_date" name="ico_date">
                                <label for="ico_date">Ico date</label>
                            </div>
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="ico_price" name="ico_price">
                                <label for="ico_price">Ico Price</label>
                            </div>
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="triker" name="triker">
                                <label for="triker">Triker/symbol</label>
                            </div>
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="suplay" name="suplay">
                                <label for="suplay">Suplay</label>
                            </div>
                            <div class="md-form form-sm">
                                <input type="text" class="form-control form-control-sm" id="whitepaper" name="whitepaper">
                                <label for="whitepaper">whitepaper</label>
                            </div>
                 
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card card-body">
                        <h5 class="h5 text-center">Step by step :</h5>
                        <!-- Step 2 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_1" class="form-control form-control-sm" name="step_1">
                            <label for="step_1">Step 1</label>
                        </div>
                        <!-- Step 2 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_2" class="form-control form-control-sm" name="step_2">
                            <label for="step_2">Step 2</label>
                        </div>
                        <!-- Step 3 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_3" class="form-control form-control-sm" name="step_3">
                            <label for="step_3">Step 3</label>
                        </div>
                        <!-- Step 4 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_4" class="form-control form-control-sm" name="step_4">
                            <label for="step_4">Step 4</label>
                        </div>
                        <!-- Step 5 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_5" class="form-control form-control-sm" name="step_5">
                            <label for="step_5">Step 5</label>
                        </div>
                        <!-- Step 6 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_6" class="form-control form-control-sm" name="step_6">
                            <label for="step_6">Step 6</label>
                        </div>
                        <!-- Step 7 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_7" class="form-control form-control-sm" name="step_7">
                            <label for="step_7">step_7</label>
                        </div>
                        <!-- Step 8 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_8" class="form-control form-control-sm" name="step_8">
                            <label for="step_8">Step 8</label>
                        </div>
                        <!-- Step 9 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_9" class="form-control form-control-sm" name="step_9">
                            <label for="step_9">Step 9</label>
                        </div>
                        <!-- Step 10 -->
                        <div class="md-form form-sm">
                            <input type="text" id="step_10" class="form-control form-control-sm" name="step_10">
                            <label for="step_10">Step 10</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="card card-body">
                        <h5 class="h5 text-center">Required Tools : :</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="fb" name="fb">
                                    <label for="fb" class="custom-control-label">Facebook</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="tw" name="tw">
                                    <label for="tw" class="custom-control-label">Twitter</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="tg" name="tg">
                                    <label for="tg" class="custom-control-label">Telegram</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="email" name="email">
                                    <label for="email" class="custom-control-label">E-mail</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="Phone" name="phone">
                                    <label for="Phone" class="custom-control-label">Phone</label>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="Kyc" name="kyc">
                                    <label for="Kyc" class="custom-control-label">Kyc</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="Medium" name="medium">
                                    <label for="Medium" class="custom-control-label">Medium</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="Reddit" name="reddit">
                                    <label for="Reddit" class="custom-control-label">Reddit</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="Discord" name="discord">
                                    <label for="Discord" class="custom-control-label">Discord</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input " id="Youtube" name="youtube">
                                    <label for="Youtube" class="custom-control-label">Youtube</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 ml-1">
                            <!-- Default switch -->
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="customSwitches" name="status">
                              <label class="custom-control-label" for="customSwitches">Status Running or Exp</label>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>

    </form>
</div>
@endsection