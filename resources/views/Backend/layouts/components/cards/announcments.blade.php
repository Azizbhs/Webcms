<div class="announcment mt-4">
    <div class=" shadow-sm">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Announcement</h5>
        @include('backend.layouts.components.datepicker')
      </div>
      <div class="list-group ann list-group-flush mt-3">
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'Outing schedule for every department',
          'time' => '5 Minutes ago',
          'showSecondIcon' => true
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'Meeting HR Department',
          'time' => 'Yesterday, 12:30 PM',
          'showSecondIcon' => true
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'IT Department need two more talents for UX/UI Designer position',
          'time' => 'Yesterday, 09:15 AM',
          'showSecondIcon' => true
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'IT Department need two more talents for UX/UI Designer position',
          'time' => 'Yesterday, 09:15 AM',
          'showSecondIcon' => true
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'IT Department need two more talents for UX/UI Designer position',
          'time' => 'Yesterday, 09:15 AM',
          'showSecondIcon' => true
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'IT Department need two more talents for UX/UI Designer position',
          'time' => 'Yesterday, 09:15 AM',
          'showSecondIcon' => true
        ])
        @include('backend.layouts.components.elements.listItem', [
          'title' => 'IT Department need two more talents for UX/UI Designer position',
          'time' => 'Yesterday, 09:15 AM',
          'showSecondIcon' => true
        ])
      </div>
      <div class="card-footer text-center">
        <a href="#" class="text-danger">See All Announcement</a>
      </div>
  </div>
</div>
