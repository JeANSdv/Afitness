@extends('admin.abstract')

@section('title', 'Пользователи')

@section('content')

<div class="sidebar bg-light">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link text-black" href="#" data-toggle="modal" data-target="#addUserModal">Добавить пользователя</a>
    </li>
  </ul>
</div>

<!-- Main content -->
<div class="main-content">
  <h2 class="text-center mb-4 text-black">Управление пользователями</h2>

  <!-- User List -->
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <table class="table table-striped bg-white">
        <thead>
          <tr>
            <th>ID</th>
            <th>Имя пользователя</th>
            <th>Email</th>
            <th>Действие</th>
          </tr>
        </thead>
        <tbody>
          <!-- Пример данных пользователя -->
          <tr>
            <td>1</td>
            <td>Иван Иванов</td>
            <td>ivan.ivanov@example.com</td>
            <td>
              <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewUserModal">Просмотр</a>
              <a href="#" class="btn btn-sm btn-warning" data-toggle="modal"
                data-target="#editUserModal">Редактировать</a>
              <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteUserModal">Удалить</a>
            </td>
          </tr>
          <!-- Добавьте больше данных по мере необходимости -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add User Modal -->
  <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addUserModalLabel">Добавить пользователя</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="userName">Имя пользователя</label>
              <input type="text" class="form-control" id="userName" placeholder="Введите имя пользователя">
            </div>
            <div class="form-group">
              <label for="userEmail">Email</label>
              <input type="email" class="form-control" id="userEmail" placeholder="Введите email">
            </div>
            <div class="form-group">
              <label for="userPassword">Пароль</label>
              <input type="password" class="form-control" id="userPassword" placeholder="Введите пароль">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          <button type="button" class="btn btn-primary">Сохранить</button>
        </div>
      </div>
    </div>
  </div>

  <!-- View User Modal -->
  <div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewUserModalLabel">Просмотр пользователя</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><strong>Имя пользователя:</strong> Иван Иванов</p>
          <p><strong>Email:</strong> ivan.ivanov@example.com</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit User Modal -->
  <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editUserModalLabel">Редактировать пользователя</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="editUserName">Имя пользователя</label>
              <input type="text" class="form-control" id="editUserName" value="Иван Иванов">
            </div>
            <div class="form-group">
              <label for="editUserEmail">Email</label>
              <input type="email" class="form-control" id="editUserEmail" value="ivan.ivanov@example.com">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          <button type="button" class="btn btn-primary">Сохранить изменения</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete User Modal -->
  <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteUserModalLabel">Удалить пользователя</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Вы уверены, что хотите удалить этого пользователя?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          <button type="button" class="btn btn-danger">Удалить</button>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection