@extends('admin.abstract')

@section('title', 'График')

@section('content')

<div class="sidebar bg-light">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link text-black" href="#" data-toggle="modal" data-target="#addScheduleModal">Добавить
        расписание</a>
    </li>
  </ul>
</div>

<!-- Main content -->
<div class="main-content">
  <h2 class="text-center mb-4 text-black">Управление расписанием тренеров</h2>

  <!-- Schedule List -->
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <table class="table table-striped bg-white">
        <thead>
          <tr>
            <th>ID</th>
            <th>Имя тренера</th>
            <th>Дата</th>
            <th>Время</th>
            <th>Действие</th>
          </tr>
        </thead>
        <tbody>
          <!-- Пример данных расписания -->
          <tr>
            <td>1</td>
            <td>Иван Иванов</td>
            <td>01.07.2024</td>
            <td>10:00 - 12:00</td>
            <td>
              <a href="#" class="btn btn-sm btn-info" data-toggle="modal" data-target="#viewScheduleModal">Просмотр</a>
              <a href="#" class="btn btn-sm btn-warning" data-toggle="modal"
                data-target="#editScheduleModal">Редактировать</a>
              <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                data-target="#deleteScheduleModal">Удалить</a>
            </td>
          </tr>
          <!-- Добавьте больше данных по мере необходимости -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Modals -->
  <!-- Add Schedule Modal -->
  <div class="modal fade" id="addScheduleModal" tabindex="-1" role="dialog" aria-labelledby="addScheduleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addScheduleModalLabel">Добавить расписание</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="coachName">Имя тренера</label>
              <input type="text" class="form-control" id="coachName" placeholder="Введите имя тренера">
            </div>
            <div class="form-group">
              <label for="scheduleDate">Дата</label>
              <input type="date" class="form-control" id="scheduleDate">
            </div>
            <div class="form-group">
              <label for="startTime">Время начала</label>
              <input type="time" class="form-control" id="startTime">
            </div>
            <div class="form-group">
              <label for="endTime">Время окончания</label>
              <input type="time" class="form-control" id="endTime">
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

  <!-- View Schedule Modal -->
  <div class="modal fade" id="viewScheduleModal" tabindex="-1" role="dialog" aria-labelledby="viewScheduleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewScheduleModalLabel">Просмотр расписания</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p><strong>Имя тренера:</strong> Иван Иванов</p>
          <p><strong>Дата:</strong> 01.07.2024</p>
          <p><strong>Время:</strong> 10:00 - 12:00</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Schedule Modal -->
  <div class="modal fade" id="editScheduleModal" tabindex="-1" role="dialog" aria-labelledby="editScheduleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editScheduleModalLabel">Редактировать расписание</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="editCoachName">Имя тренера</label>
              <input type="text" class="form-control" id="editCoachName" value="Иван Иванов">
            </div>
            <div class="form-group">
              <label for="editScheduleDate">Дата</label>
              <input type="date" class="form-control" id="editScheduleDate" value="2024-07-01">
            </div>
            <div class="form-group">
              <label for="editStartTime">Время начала</label>
              <input type="time" class="form-control" id="editStartTime" value="10:00">
            </div>
            <div class="form-group">
              <label for="editEndTime">Время окончания</label>
              <input type="time" class="form-control" id="editEndTime" value="12:00">
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

  <!-- Delete Schedule Modal -->
  <div class="modal fade" id="deleteScheduleModal" tabindex="-1" role="dialog"
    aria-labelledby="deleteScheduleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteScheduleModalLabel">Удалить расписание</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Вы уверены, что хотите удалить это расписание?</p>
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