@extends('layouts.dashboard')

@section('content')
    <div class="bg-light-gradient header-sm">
          <span class="float-right p-2"><img src="/image/logo.png" alt="Logo" height="80">
    </div>
    <div class="p4 content">
        <div class="bg-white p-4 box-shadow rounded-lg">
            <h2 class="text-dark">Menu</h2>
            <span class="float-right p-2">
                <i class="fas fa-search"></i>
                <i class="fas fa-filter ml-2"></i>
            </span>
            <br>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Menu Item</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Type</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td><img
                                src="https://i.imgur.com/lYKUORL.jpg"
                                width="40px"
                                height="40px"
                                class="mr-2 rounded"
                            />
                            Menu Item 1</td>
                        <td>$ 12.00</td>
                        <td>Menu Item 1 for breakfast</td>
                        <td>Breakfast</td>
                        <td>
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash ml-2"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <img
                                src="https://i.imgur.com/AXAHrf6.jpg"
                                width="40px"
                                height="40px"
                                class="mr-2 rounded"
                            />Menu Item 2
                        </td>
                        <td>$ 4.00</td>
                        <td>Menu Item 2 for dinner</td>
                        <td>Dinner</td>
                        <td>
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash ml-2"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img
                                src="https://i.imgur.com/AXAHrf6.jpg"
                                width="40px"
                                height="40px"
                                class="mr-2 rounded"
                            />Menu Item 3</td>
                        <td>$ 6.00</td>
                        <td>Menu Item 3 for dinner</td>
                        <td>Dinner</td>
                        <td>
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash ml-2"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> <img
                                src="https://i.imgur.com/kbpceNv.jpg"
                                width="40px"
                                height="40px"
                                class="mr-2 rounded"
                            />Menu Item 4</td>
                        <td>$ 26.00</td>
                        <td>
                           Menu Item 4 from Buffet</td>
                        <td>Buffet</td>
                        <td>
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash ml-2"></i>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
