<h2>Добро пожаловать отсюда, {{ Auth::user()->name }}</h2>
<a href="{{ Route('admin.index') }}" class="red-link">Перейти в админку</a>
| <a href="{{ Route('account.logout') }}" class="red-link">Выход</a>
