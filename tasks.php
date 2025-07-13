<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DynaSoft software</title>
</head>

<body class="h-full m-0 p-0 font-sans bg-gray-300">
  <div class="flex justify-between p-[20px]  ">
    <div>
      <h1 class="text-2xl font-bold block px-10">Task Management</h1>
    </div>
    <div class="text-white bg-blue-600 w-[100ppx] rounded">
      + Create New Tasks
    </div>

  </div>

  <div class=" flex justify-center max-w-7xl mx-auto my-auto bg-white shadow rounded flex gap-4 mb-4 px-10">
    <div class="flex justify-between mt-8  p-[20px]  grid grid-cols-4 gap-10 ">
      <div class="border border-gray-300 rounded px-4 py-2 w-full h-[7vh]">
        <input type="text" placeholder="Search tasks..." />
      </div>
      <div>
        <select class="border border-gray-300 rounded px-4 py-2">
          <option>All Tasks</option>
        </select>
      </div>

      <div>
        <select class="border border-gray-300 rounded px-4 py-2">
          <option>All Groups</option>
        </select>
      </div>

      <div class=" bg-gray-800 text-white px-4 py-5 rounded  w-[125px]"><svg class="px-2 h-[3vh] inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
        </svg>
        Filter
      </div>
    </div>
  </div>



  <div class="  border-t bg-white  max-w-7xl  h-[50vh] mx-auto my-auto bg-white shadow rounded px-5 py-10 ">

    <div>
      <div class=" border-b flex justify-between inline-block">
       
         <div>
          <h2>Tasks</h2>
         </div>

          <div class="text-white bg-blue-600 w-[100] rounded mb-4">
            Create New Tasks
          </div>
      </div>

      <div>
        <table class="w-full text-left">
          <thead>
            <tr class="text-gray-600 uppercase text-sm border-b">
              <th class="py-2">Task</th>
              <th class="py-2">Due Date</th>
              <th class="py-2">Status</th>
              <th class="py-2">Actions</th>
            </tr>
          </thead>
          <tbody class="text-gray-700">
            <?php
            $tasks = [
              ['name' => 'React Component Development', 'due' => '2023-07-05', 'status' => 'pending'],
              ['name' => 'Database Design Exercise', 'due' => '2023-07-10', 'status' => 'in_progress'],
              ['name' => 'API Integration Project', 'due' => '2023-07-15', 'status' => 'completed'],
            ];

            foreach ($tasks as $task) {
              $statusColor = match ($task['status']) {
                'pending' => 'bg-yellow-200 text-yellow-800',
                'in_progress' => 'bg-blue-200 text-blue-800',
                'completed' => 'bg-green-200 text-green-800',
                default => 'bg-gray-200 text-gray-800',
              };

              echo "<tr class='border-t'>
                                <td class='py-2'>{$task['name']}</td>
                                <td class='py-2'>" . date('n/j/Y', strtotime($task['due'])) . "</td>
                                <td class='py-2'>
                                    <span class='px-3 py-1 rounded-full text-sm font-semibold $statusColor'>
                                        {$task['status']}
                                    </span>
                                </td>
                                <td class='py-2 flex gap-2'>
                                    <button title='View'><i class='fas fa-eye text-gray-500 hover:text-black'></i></button>
                                    <button title='Edit'><i class='fas fa-edit text-blue-500 hover:text-blue-700'></i></button>
                                    <button title='Delete'><i class='fas fa-trash text-red-500 hover:text-red-700'></i></button>
                                </td>
                            </tr>";
            }
            ?>
          </tbody>
        </table>
      </div>

      </table>

    </div>
</body>

</html>