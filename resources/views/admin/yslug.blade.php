@extends('admin.abstract')

@section('title', 'Услуги')

@section('content')

<div class="sidebar bg-light bg-dark">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#addServiceModal">Добавить услугу</a>
    </li>
  </ul>
</div>
<!-- Add Service Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addServiceModalLabel">Добавить услугу</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="serviceName">Название услуги</label>
            <input type="text" class="form-control" id="serviceName" placeholder="Введите название услуги">
          </div>
          <div class="form-group">
            <label for="serviceDescription">Описание</label>
            <textarea class="form-control" id="serviceDescription" rows="3"
              placeholder="Введите описание услуги"></textarea>
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

<div class="main-content">
  <h2 class="text-center mb-4 text-white">Управление услугами</h2>

  <!-- Service List -->
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <table class="table table-striped bg-white">
        <thead>
          <tr>
            <th>ID</th>
            <th>Название услуги</th>
            <th>Описание</th>
            <th>Действие</th>
          </tr>
        </thead>
        <tbody>
          <!-- Пример данных услуги -->
          <tr>
            <td>1</td>
            <td>Разработка сайтов</td>
            <td>Создание и поддержка сайтов</td>
            <td>
              <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewServiceModal">Просмотр</a>
              <a href="#" class="btn btn-sm btn-warning" data-toggle="modal"
                data-target="#editServiceModal">Редактировать</a>
              <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                data-target="#deleteServiceModal">Удалить</a>
            </td>
          </tr>
          <!-- Добавьте больше данных по мере необходимости -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Service Modal -->
  <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addServiceModalLabel">Добавить услугу</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="serviceName">Название услуги</label>
              <input type="text" class="form-control" id="serviceName" placeholder="Введите название услуги">
            </div>
            <div class="form-group">
              <label for="serviceDescription">Описание</label>
              <textarea class="form-control" id="serviceDescription" rows="3"
                placeholder="Введите описание услуги"></textarea>
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

  <!-- View Service Modal -->
  <div class="modal fade" id="viewServiceModal" tabindex="-1" role="dialog" aria-labelledby="viewServiceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewServiceModalLabel">Просмотр услуги</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><strong>Название услуги:</strong> Разработка сайтов</p>
          <p><strong>Описание:</strong> Создание и поддержка сайтов</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Service Modal -->
  <div class="modal fade" id="editServiceModal" tabindex="-1" role="dialog" aria-labelledby="editServiceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editServiceModalLabel">Редактировать услугу</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="editServiceName">Название услуги</label>
              <input type="text" class="form-control" id="editServiceName" value="Разработка сайтов">
            </div>
            <div class="form-group">
              <label for="editServiceDescription">Описание</label>
              <textarea class="form-control" id="editServiceDescription" rows="3">Создание и поддержка сайтов</textarea>
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

  <!-- Delete Service Modal -->
  <div class="modal fade" id="deleteServiceModal" tabindex="-1" role="dialog" aria-labelledby="deleteServiceModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteServiceModalLabel">Удалить услугу</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Вы уверены, что хотите удалить эту услугу?</p>
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