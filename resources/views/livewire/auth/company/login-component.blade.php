@section('title')
    Company Login
@endsection
<div>
   <div class="row justify-content-center">
      <div class="col-md-5">
            <div class="card mt-5">
                  <div class="card-header">
                        <h5><strong>Company Login</strong></h5>
                  </div>
                        <div class="card-body">
                        @if(session()->has('error'))
                              <div class="alert alert-danger text-center">{{ session('error') }}</div>
                           @endif
                           @if(session()->has('success'))
                              <div class="alert alert-success text-center">{{ session('success') }}</div>
                           @endif
                              <form wire:submit.prevent="companyLogin">
                                 <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" wire:model='email'>
                                    @error('email')
                                       <span class="text-danger" style="font-size:13px;">{{$message}}</span>
                                    @enderror
                                 </div>

                                 <div class="mb-3">
                                    <label for="exampleFormControlInput" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput" wire:model='password'>
                                    @error('password')
                                       <span class="text-danger" style="font-size:13px;">{{$message}}</span>
                                    @enderror
                                 </div>

                                 <button class="btn btn-primary btn-block" type="submit">Submit</button>
                              </form> 
                        </div>
            
            </div>
      </div>
   </div>
</div>
