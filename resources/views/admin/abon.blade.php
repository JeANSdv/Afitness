@extends('admin.abstract')

@section('title', 'Абонименты')

@section('content')

<div class="sidebar bg-light">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link text-black" href="#" data-toggle="modal" data-target="#addSubscriptionModal">Добавить
        абонемент</a>
    </li>
  </ul>
</div>
<!-- Main content -->
<div class="main-content ">
  <h2 class="text-center mb-4 text-black">Управление абонементами</h2>

  <!-- Subscription List -->
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <table class="table table-striped bg-white">
        <thead>
          <tr>
            <th>ID</th>
            <th>Название абонемента</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>Действие</th>
          </tr>
        </thead>
        <tbody>
          <!-- Пример данных абонемента -->
          <tr>
            <td>1</td>
            <td>Базовый</td>
            <td>Доступ к основным функциям</td>
            <td>1000 руб./мес</td>
            <td>
              <a href="#" class="btn btn-sm btn-info" data-toggle="modal"
                data-target="#viewSubscriptionModal">Просмотр</a>
              <a href="#" class="btn btn-sm btn-warning" data-toggle="modal"
                data-target="#editSubscriptionModal">Редактировать</a>
              <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                data-target="#deleteSubscriptionModal">Удалить</a>
            </td>
          </tr>
          <!-- Добавьте больше данных по мере необходимости -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Add Subscription Modal -->
  <div class="modal fade" id="addSubscriptionModal" tabindex="-1" role="dialog"
    aria-labelledby="addSubscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addSubscriptionModalLabel">Добавить абонемент</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="subscriptionName">Название абонемента</label>
              <input type="text" class="form-control" id="subscriptionName" placeholder="Введите название абонемента">
            </div>
            <div class="form-group">
              <label for="subscriptionDescription">Описание</label>
              <textarea class="form-control" id="subscriptionDescription" rows="3"
                placeholder="Введите описание абонемента"></textarea>
            </div>
            <div class="form-group">
              <label for="subscriptionPrice">Цена</label>
              <input type="text" class="form-control" id="subscriptionPrice" placeholder="Введите цену абонемента">
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

  <!-- View Subscription Modal -->
  <div class="modal fade" id="viewSubscriptionModal" tabindex="-1" role="dialog"
    aria-labelledby="viewSubscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewSubscriptionModalLabel">Просмотр абонемента</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><strong>Название абонемента:</strong> Базовый</p>
          <p><strong>Описание:</strong> Доступ к основным функциям</p>
          <p><strong>Цена:</strong> 1000 руб./мес</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Subscription Modal -->
  <div class="modal fade" id="editSubscriptionModal" tabindex="-1" role="dialog"
    aria-labelledby="editSubscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editSubscriptionModalLabel">Редактировать абонемент</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="editSubscriptionName">Название абонемента</label>
              <input type="text" class="form-control" id="editSubscriptionName" value="Базовый">
            </div>
            <div class="form-group">
              <label for="editSubscriptionDescription">Описание</label>
              <textarea class="form-control" id="editSubscriptionDescription" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="editSubscriptionPrice">Цена</label>
              <input type="text" class="form-control" id="editSubscriptionPrice" value="">
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

  <!-- Delete Subscription Modal -->
  <div class="modal fade" id="deleteSubscriptionModal" tabindex="-1" role="dialog"
    aria-labelledby="deleteSubscriptionModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteSubscriptionModalLabel">Удалить абонемент</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Вы уверены, что хотите удалить этот абонемент?</p>
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