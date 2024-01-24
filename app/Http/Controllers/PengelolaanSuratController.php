<?php

    namespace App\Http\Controllers;

    use App\Models\PengelolaanSurat;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;

    class PengelolaanSuratController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        // ...
    public function auth(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);

        //                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
        if (Auth::attempt($user)) {
            return redirect('/');
        } 
        return redirect('/login');
    }
        public function logout()
        {
            Auth::logout();
            return redirect('/login');
        }
    // ...

        public function home()
        {
            return view('tampilan.index');
        }
        public function registerAccount(Request $request)
        {
            $request -> validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            return redirect('/login');
        }
        public function login()
        {
            return view('auth.login');
        }
        public function register()
        {
            return view('auth.register');
        }
        public function index()
        {
            
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  \App\Models\PengelolaanSurat  $pengelolaanSurat
         * @return \Illuminate\Http\Response
         */
        public function show(PengelolaanSurat $pengelolaanSurat)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\PengelolaanSurat  $pengelolaanSurat
         * @return \Illuminate\Http\Response
         */
        public function edit(PengelolaanSurat $pengelolaanSurat)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\PengelolaanSurat  $pengelolaanSurat
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, PengelolaanSurat $pengelolaanSurat)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\PengelolaanSurat  $pengelolaanSurat
         * @return \Illuminate\Http\Response
         */
        public function destroy(PengelolaanSurat $pengelolaanSurat)
        {
            //
        }
    }
