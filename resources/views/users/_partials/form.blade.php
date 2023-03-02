@csrf
<input type="text" name="name" placeholder="Nome" id="name" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" placeholder="Email" id="email" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Senha" id="password">

<button type="submit">Salvar</button>