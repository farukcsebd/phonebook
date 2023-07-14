<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- <form action="" method="POST">
                    <x-input-label for="name" :value="__('Name')" />

                </form> -->
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">created_at</th>
                        <th scope="col">updated_at</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                if(!empty($contacts)){
                foreach($contacts as $con){  ?>
                        <tr>
                        <td>{{ $con->name }}</td>
                        <td>{{ $con->mobile }}</td>
                        <td>{{ $con->email }}</td>
                        <td>{{ $con->created_at }}</td>
                        <td>{{ $con->updated_at }}</td>
                        </tr>
                        <?php 
                  }  
                } ?>
                    </tbody>

                </table>

            </div>
            
            {!! $contacts->links() !!}

        </div>

    </div>
</x-app-layout>