<div class="row">
    <div class="col-md-3 mb-3">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" 
               value="{{ old('nome', $cliente->nome ?? '') }}" placeholder="Digite o nome completo">
        @error('nome') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-3 mb-3">
        <label for="cpf_cnpj">CPF/CNPJ:</label>
        <input type="text" class="form-control @error('cpf_cnpj') is-invalid @enderror" id="cpf_cnpj" name="cpf_cnpj" 
               value="{{ old('cpf_cnpj', $cliente->cpf_cnpj ?? '') }}" placeholder="Digite o CPF ou CNPJ">
        @error('cpf_cnpj') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-3 mb-3">
        <label for="telefone">Telefone:</label>
        <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" 
               value="{{ old('telefone', $cliente->telefone ?? '') }}" placeholder="(##) #####-####">
        @error('telefone') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-3 mb-3">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" 
               value="{{ old('email', $cliente->email ?? '') }}" placeholder="Exemplo: cadastro@email.com">
        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <label for="cep">CEP:</label>
        <input type="number" class="form-control @error('cep') is-invalid @enderror" id="cep" name="cep" 
               value="{{ old('cep', $cliente->cep ?? '') }}" placeholder="00000-000">
        @error('cep') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4 mb-3">
        <label for="numero">Número:</label>
        <input type="number" class="form-control @error('numero') is-invalid @enderror" id="numero" name="numero" 
               value="{{ old('numero', $cliente->numero ?? '') }}" placeholder="Número da residência">
        @error('numero') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4 mb-3">
        <label for="rua">Rua/Avenida:</label>
        <input type="text" class="form-control @error('rua') is-invalid @enderror" id="rua" name="rua" 
               value="{{ old('rua', $cliente->rua ?? '') }}" placeholder="Nome da rua ou avenida">
        @error('rua') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <label for="bairro">Bairro:</label>
        <input type="text" class="form-control @error('bairro') is-invalid @enderror" id="bairro" name="bairro" 
               value="{{ old('bairro', $cliente->bairro ?? '') }}" placeholder="Nome do bairro">
        @error('bairro') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4 mb-3">
        <label for="cidade">Cidade:</label>
        <input type="text" class="form-control @error('cidade') is-invalid @enderror" id="cidade" name="cidade" 
               value="{{ old('cidade', $cliente->cidade ?? '') }}" placeholder="Nome da cidade">
        @error('cidade') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>

    <div class="col-md-4 mb-3">
        <label for="estado">Estado:</label>
        <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" 
               value="{{ old('estado', $cliente->estado ?? '') }}" placeholder="Ex: SP, RJ, MG...">
        @error('estado') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>