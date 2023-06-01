<div>
   <div class="row justify-content-center">
      <div class="col-md-5">
            <div class="card mt-5">
                  <div class="card-header">
                        <h5><strong>User Registration</strong></h5>
                  </div>
                        <div class="card-body">
                        @if(session()->has('error'))
                              <div class="alert alert-danger text-center">{{ session('error') }}</div>
                           @endif
                           @if(session()->has('success'))
                              <div class="alert alert-success text-center">{{ session('success') }}</div>
                           @endif
                              <form wire:submit.prevent="userRegister">
                                 <div class="mb-3">
                                    <label for="exampleFormControlInput2" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput2" wire:model='first_name'>
                                    @error('first_name')
                                       <span class="text-danger" style="font-size:13px;">{{$message}}</span>
                                    @enderror
                                 </div>

                                 <div class="mb-3">
                                    <label for="exampleFormControlInput3" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput3" wire:model='last_name'>
                                    @error('last_name')
                                       <span class="text-danger" style="font-size:13px;">{{$message}}</span>
                                    @enderror
                                 </div>
                                 
                                 <div class="mb-3">
                                    <label for="exampleFormControlInput7" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="exampleFormControlInput7" wire:model='phone'>
                                    @error('phone')
                                       <span class="text-danger" style="font-size:13px;">{{$message}}</span>
                                    @enderror
                                 </div>


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

                                 <div class="mb-3">
                                    <label for="exampleFormControlInput5" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput5" wire:model='confirm_password'>
                                    @error('confirm_password')
                                       <span class="text-danger" style="font-size:13px;">{{$message}}</span>
                                    @enderror
                                 </div>

                                 <button class="btn btn-primary btn-block" type="submit">Register</button>
                              </form> 
                        </div>
            
            </div>
      </div>
   </div>
</div>
