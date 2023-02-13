<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <meta name="description" content="" />
    <script
      src="https://kit.fontawesome.com/7fd90f7e36.js"
      crossorigin="anonymous"
    ></script>

    <!-- Tailwind -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css?family=Karla:400,700&display=swap");
      .font-family-karla {
        font-family: karla;
      }
      .bg-sidebar {
        background: #756300;
      }
      .cta-btn {
        color: linear-gradient(to right, #ffe55c, #ffce2e, #ffc700, #d1b000);
      }
      .upgrade-btn {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .upgrade-btn:hover {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .active-nav-link {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .nav-item:hover {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
      .account-link:hover {
        background: linear-gradient(
          to right,
          #ffe55c,
          #ffce2e,
          #ffc700,
          #d1b000
        );
      }
    </style>
  </head>
  <body class="bg-white font-family-karla flex">
    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
      <div class="p-6">
        <a
          href="/dashboard"
          class="text-white text-3xl font-semibold uppercase hover:text-gray-300"
          >Admin</a
        >
        <button
          class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center"
        >
          <i class="fas fa-plus mr-3"></i> New Report
        </button>
      </div>
      <nav class="text-white text-base font-semibold pt-3">
        <a
          href="/"
          class="flex items-center text-white py-4 pl-6 nav-item"
        >
        <i class="fa-solid fa-house mr-3"></i>
          Home
        </a>
        <a
          href="/dashboard"
          class="flex items-center active-nav-link text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
        >
          <i class="fas fa-tachometer-alt mr-3"></i>
          Dashboard
        </a>
        <a
          href="/dashboard/tables"
          class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
        >
          <i class="fas fa-table mr-3"></i>
          Tables
        </a>
        <a
          href="/dashboard/forms"
          class="flex items-center text-white py-4 pl-6 nav-item"
        >
          <i class="fas fa-align-left mr-3"></i>
          Forms
        </a>
        <a
          href="/dashboard/calendar"
          class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
        >
          <i class="fas fa-calendar mr-3"></i>
          Calendar
        </a>
        <a
            href="#"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item"
          >
            <i class="fas fa-sign-out-alt mr-3"></i>
            Sign Out
          </a>
      </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
      <!-- Desktop Header -->
      <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
        <div class="w-1/2"></div>
        <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
          <button
            class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none"
          >
            <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400" />
          </button>
          <button
            x-show="isOpen"
            @click="isOpen = false"
            class="h-full w-full fixed inset-0 cursor-default"
          ></button>
        </div>
      </header>
      
      <!-- Mobile Header & Nav -->
      <header
        x-data="{ isOpen: false }"
        class="w-full bg-sidebar py-5 px-6 sm:hidden"
      >
        <div class="flex items-center justify-between">
          <a
            href="/dashboard"
            class="text-white text-3xl font-semibold uppercase hover:text-gray-300"
            >Admin</a
          >
          <button
            @click="isOpen = !isOpen"
            class="text-white text-3xl focus:outline-none"
          >
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
          </button>
        </div>

        <!-- Dropdown Nav -->
        <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
          <a
            href="/dashboard"
            class="flex items-center active-nav-link  text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
          >
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
          </a>
          <a
            href="/dashboard/tables"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
          >
            <i class="fas fa-table mr-3"></i>
            Tables
          </a>
          <a
            href="/dashboard/forms"
            class="flex items-center text-white py-2 pl-4 nav-item"
          >
            <i class="fas fa-align-left mr-3"></i>
            Forms
          </a>
          <a
            href="/dashboard/calendar"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
          >
            <i class="fas fa-calendar mr-3"></i>
            Calendar
          </a>
          <a
            href="#"
            class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
          >
            <i class="fas fa-sign-out-alt mr-3"></i>
            Sign Out
          </a>
         
        </nav>
        <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
      </header>

      <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
          <h1 class="text-3xl text-black pb-6">Dashboard</h1>

          <div class="flex flex-wrap mt-6">
            <div class="w-full lg:w-1/2 pr-0 lg:pr-2">
              <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-plus mr-3"></i> Monthly Reports
              </p>
              <div class="p-6 bg-white">
                <canvas id="chartOne" width="400" height="200"></canvas>
              </div>
            </div>
            <div class="w-full lg:w-1/2 pl-0 lg:pl-2 mt-12 lg:mt-0">
              <p class="text-xl pb-3 flex items-center">
                <i class="fas fa-check mr-3"></i> Resolved Reports
              </p>
              <div class="p-6 bg-white">
                <canvas id="chartTwo" width="400" height="200"></canvas>
              </div>
            </div>
          </div>

          <div class="w-full mt-12">
            <p class="text-xl pb-3 flex items-center">
              <i class="fas fa-list mr-3"></i> Latest Reports
            </p>
            <div class="bg-white overflow-auto">
              <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                  <tr>
                    <th
                      class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                    >
                      Property Type
                    </th>
                    <th
                      class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm"
                    >
                      Location
                    </th>
                    <th
                      class="text-left py-3 px-4 uppercase font-semibold text-sm"
                    >
                      Model
                    </th>
                    <th
                      class="text-left py-3 px-4 uppercase font-semibold text-sm"
                    >
                      Price
                    </th>
                    <th
                      class="text-center py-3 px-4 uppercase font-semibold text-sm"
                    >
                      Status
                    </th>
                  </tr>
                </thead>
                <tbody class="text-gray-700">
                  <tr>
                    <td class="w-1/3 text-left py-3 px-4">Lian</td>
                    <td class="w-1/3 text-left py-3 px-4">Smith</td>
                    <td class="text-left py-3 px-4">
                      <a class="hover:text-blue-500" href="tel:622322662"
                        >622322662</a
                      >
                    </td>
                    <td class="text-left py-3 px-4">
                      <a
                        class="hover:text-blue-500"
                        href="mailto:jonsmith@mail.com"
                        >jonsmith@mail.com</a
                      >
                    </td>
                    <td class="w-1/3 text-center py-3 px-4">Rented</td>
                  </tr>
                  <tr class="bg-gray-200">
                    <td class="w-1/3 text-left py-3 px-4">Emma</td>
                    <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                    <td class="text-left py-3 px-4">
                      <a class="hover:text-blue-500" href="tel:622322662"
                        >622322662</a
                      >
                    </td>
                    <td class="text-left py-3 px-4">
                      <a
                        class="hover:text-blue-500"
                        href="mailto:jonsmith@mail.com"
                        >jonsmith@mail.com</a
                      >
                    </td>
                    <td class="w-1/3 text-center py-3 px-4">Rented</td>
                  </tr>
                  <tr>
                    <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                    <td class="w-1/3 text-left py-3 px-4">Williams</td>
                    <td class="text-left py-3 px-4">
                      <a class="hover:text-blue-500" href="tel:622322662"
                        >622322662</a
                      >
                    </td>
                    <td class="text-left py-3 px-4">
                      <a
                        class="hover:text-blue-500"
                        href="mailto:jonsmith@mail.com"
                        >jonsmith@mail.com</a
                      >
                    </td>
                    <td class="w-1/3 text-center py-3 px-4">Rented</td>
                  </tr>
                  <tr class="bg-gray-200">
                    <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                    <td class="w-1/3 text-left py-3 px-4">Brown</td>
                    <td class="text-left py-3 px-4">
                      <a class="hover:text-blue-500" href="tel:622322662"
                        >622322662</a
                      >
                    </td>
                    <td class="text-left py-3 px-4">
                      <a
                        class="hover:text-blue-500"
                        href="mailto:jonsmith@mail.com"
                        >jonsmith@mail.com</a
                      >
                    </td>
                    <td class="w-1/3 text-center py-3 px-4">Rented</td>
                  </tr>
                  <tr>
                    <td class="w-1/3 text-left py-3 px-4">Lian</td>
                    <td class="w-1/3 text-left py-3 px-4">Smith</td>
                    <td class="text-left py-3 px-4">
                      <a class="hover:text-blue-500" href="tel:622322662"
                        >622322662</a
                      >
                    </td>
                    <td class="text-left py-3 px-4">
                      <a
                        class="hover:text-blue-500"
                        href="mailto:jonsmith@mail.com"
                        >jonsmith@mail.com</a
                      >
                    </td>
                    <td class="w-1/3 text-center py-3 px-4">Rented</td>
                  </tr>
                  <tr class="bg-gray-200">
                    <td class="w-1/3 text-left py-3 px-4">Emma</td>
                    <td class="w-1/3 text-left py-3 px-4">Johnson</td>
                    <td class="text-left py-3 px-4">
                      <a class="hover:text-blue-500" href="tel:622322662"
                        >622322662</a
                      >
                    </td>
                    <td class="text-left py-3 px-4">
                      <a
                        class="hover:text-blue-500"
                        href="mailto:jonsmith@mail.com"
                        >jonsmith@mail.com</a
                      >
                    </td>
                    <td class="w-1/3 text-center py-3 px-4">Rented</td>
                  </tr>
                  <tr>
                    <td class="w-1/3 text-left py-3 px-4">Oliver</td>
                    <td class="w-1/3 text-left py-3 px-4">Williams</td>
                    <td class="text-left py-3 px-4">
                      <a class="hover:text-blue-500" href="tel:622322662"
                        >622322662</a
                      >
                    </td>
                    <td class="text-left py-3 px-4">
                      <a
                        class="hover:text-blue-500"
                        href="mailto:jonsmith@mail.com"
                        >jonsmith@mail.com</a
                      >
                    </td>
                    <td class="w-1/3 text-center py-3 px-4">Rented</td>
                  </tr>
                  <tr class="bg-gray-200">
                    <td class="w-1/3 text-left py-3 px-4">Isabella</td>
                    <td class="w-1/3 text-left py-3 px-4">Brown</td>
                    <td class="text-left py-3 px-4">
                      <a class="hover:text-blue-500" href="tel:622322662"
                        >622322662</a
                      >
                    </td>
                    <td class="text-left py-3 px-4">
                      <a
                        class="hover:text-blue-500"
                        href="mailto:jonsmith@mail.com"
                        >jonsmith@mail.com</a
                      >
                    </td>
                    <td class="w-1/3 text-center py-3 px-4">Rented</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </main>

        <footer class="w-full bg-white text-right p-4">
          Built by
          <a target="_blank" href="#" class="underline">WonderBoys</a>.
        </footer>
      </div>
    </div>

    <!-- AlpineJS -->
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <!-- Font Awesome -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
    <!-- ChartJS -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="
      crossorigin="anonymous"
    ></script>

    <script>
      var chartOne = document.getElementById("chartOne");
      var myChart = new Chart(chartOne, {
        type: "bar",
        data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [
            {
              label: "# of Votes",
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                "rgba(255, 99, 132, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 206, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(255, 159, 64, 0.2)",
              ],
              borderColor: [
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)",
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                },
              },
            ],
          },
        },
      });

      var chartTwo = document.getElementById("chartTwo");
      var myLineChart = new Chart(chartTwo, {
        type: "line",
        data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [
            {
              label: "# of Votes",
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                "rgba(255, 99, 132, 0.2)",
                "rgba(54, 162, 235, 0.2)",
                "rgba(255, 206, 86, 0.2)",
                "rgba(75, 192, 192, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(255, 159, 64, 0.2)",
              ],
              borderColor: [
                "rgba(255, 99, 132, 1)",
                "rgba(54, 162, 235, 1)",
                "rgba(255, 206, 86, 1)",
                "rgba(75, 192, 192, 1)",
                "rgba(153, 102, 255, 1)",
                "rgba(255, 159, 64, 1)",
              ],
              borderWidth: 1,
            },
          ],
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true,
                },
              },
            ],
          },
        },
      });
    </script>
  </body>
</html>
