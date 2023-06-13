<x-guest-layout>
	<form method="POST" action="{{ route('register') }}">
		@csrf

		<!-- Name -->
		<div>
			<x-input-label for="name" :value="__('Name')" />
			<x-text-input placgite o seu neholder="Diome" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
			<x-input-error :messages="$errors->get('name')" class="mt-2" />
		</div>

		<!-- Endereco -->
		<div>
			<x-input-label for="endereco" :value="__('Endereço')" />
			<x-text-input placeholder="Digite o seu endereço" id="endereco" class="block mt-1 w-full" type="text" name="endereco" :value="old('endereco')" required autofocus autocomplete="endereco" />
			<x-input-error :messages="$errors->get('endereco')" class="mt-2" />
		</div>

		<!-- Bairro -->
		<div>
			<x-input-label for="bairro" :value="__('Bairro')" />
			<x-text-input placeholder="Digite o nome de seu Bairro" id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required autofocus autocomplete="bairro" />
			<x-input-error :messages="$errors->get('bairro')" class="mt-2" />
		</div>

		<!-- Cep -->
		<div>
			<x-input-label for="cep" :value="__('CEP')" />
			<x-text-input pattern="\d{5}-?\d{3}" title="o campo deve corresponder a 8 dígitos. Ex: (xxxxx-xxx)" placeholder="Digite o seu CEP" id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required autofocus autocomplete="cep" />
			<x-input-error :messages="$errors->get('cep')" class="mt-2" />
		</div>

		<!-- Cidade -->
		<div>
			<x-input-label for="cidade" :value="__('Cidade')" />
			<x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required autofocus autocomplete="cidade" />
			<x-input-error :messages="$errors->get('cidade')" class="mt-2" />
		</div>

		<!-- Estado -->
		<div>
			<x-input-label for="estado" :value="__('Estado')" />
			<x-text-input placeholder="Digite o nome do se estado" id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required autofocus autocomplete="estado" />
			<x-input-error :messages="$errors->get('estado')" class="mt-2" />
		</div>

		<!-- Telefone -->
		<div>
			<x-input-label for="telefone" :value="__('Telefone')" />
			<x-text-input pattern="\d{2}\[\s]\d{4}-?\d{4}" title="o campo deve corresponder a 10 dígitos, contendo o DDD. Ex: (xx)xxxx-xxxx" placeholder="Digite o seu número de telefone" id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required autofocus autocomplete="telefone" />
			<x-input-error :messages="$errors->get('telefone')" class="mt-2" />
		</div>

		 <!-- Celular -->
		<div>
			<x-input-label for="celular" :value="__('Celular')" />
			<x-text-input pattern="\d{2}\[\s]\d{5}-?\d{4}" title="o campo deve corresponder a 11 dígitos, contendo o DDD. Ex: (xx)xxxxx-xxxx" placeholder="Digite o seu número de celular" id="celular" class="block mt-1 w-full" type="text" name="celular" :value="old('celular')" required autofocus autocomplete="celular" />
			<x-input-error :messages="$errors->get('celular')" class="mt-2" />
		</div>

		<!-- Email Address -->
		<div class="mt-4">
			<x-input-label for="email" :value="__('Email')" />
			<x-text-input placeholder="exemplo@email.com" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
			<x-input-error :messages="$errors->get('email')" class="mt-2" />
		</div>

		<!-- Password -->
		<div class="mt-4">
			<x-input-label for="password" :value="__('Password')" />

			<x-text-input placeholder="digite uma senha" id="password" class="block mt-1 w-full"
							type="password"
							name="password"
							required autocomplete="new-password" />

			<x-input-error :messages="$errors->get('password')" class="mt-2" />
		</div>

		<!-- Confirm Password -->
		<div class="mt-4">
			<x-input-label for="password_confirmation" :value="__('Confirm Password')" />

			<x-text-input placeholder="Confirme sua senha" id="password_confirmation" class="block mt-1 w-full"
							type="password"
							name="password_confirmation" required autocomplete="new-password" />

			<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
		</div>

		<div class="flex items-center justify-end mt-4">
			<a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
				{{ __('Already registered?') }}
			</a>

			<x-primary-button class="ml-4">
				{{ __('Register') }}
			</x-primary-button>
		</div>
	</form>
</x-guest-layout>
