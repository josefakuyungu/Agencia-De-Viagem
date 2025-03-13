 


<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="_lk_de"></div>
                <form wire:submit="signIn" id="loginForm">
                    <div class="form-group">
                        <input type="text" wire:model="email" class="form-control _ge_de_ol" placeholder="Digite o seu email">
                        @error("email")
                            <p>{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" wire:model="password" class="form-control _ge_de_ol" placeholder="Digite a sua senha">
                        @error("password")
                        <p>{{$message}}</p>
                    @enderror
                    </div>
                    <div class="form-group text-center">
                        <button  type="submit" class="btn btn-block text-white rounded-pill">Login</button>
                    </div>
                </form>
                <div class="link text-center">
                    <a href="/">Voltar à página inicial</a>
                </div>
            </div>
        </div>
    </div>
</div>



