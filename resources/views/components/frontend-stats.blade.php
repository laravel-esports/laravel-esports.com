<div>
    @php($users = \App\Models\User::count())
    @php($matches = \App\Models\Match::count())
    @php($clans = \App\Models\Clan::count())
<div class="bg-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
          Players and teams from around the world
        </h2>

        <p class="mt-3 text-xl text-gray-200 sm:mt-4">
          Our community has played in {{ $matches }} matches within {{ $clans }} teams from all over the world.
        </p>
      </div>

      <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
        <div class="flex flex-col">
          <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-200">
            Players
          </dt>

          <dd class="order-1 text-5xl font-extrabold text-white">
            {{ $users }}
          </dd>
        </div>

        <div class="flex flex-col mt-10 sm:mt-0">
          <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-200">
            Matches
          </dt>

          <dd class="order-1 text-5xl font-extrabold text-white">
            {{ $matches }}
          </dd>
        </div>

        <div class="flex flex-col mt-10 sm:mt-0">
          <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-200">
            Teams
          </dt>

          <dd class="order-1 text-5xl font-extrabold text-white">
            {{ $clans }}
          </dd>
        </div>
      </dl>
    </div>
  </div>

</div>
