<?php
    use App\Letter;
    use Illuminate\Http\Request;
    Route::get(
            '/',
            function () {
                $letters = Letter::all();
                return view(
                        'all-letters',
                        ["letters" => $letters]
                );
            }
    );
    Route::get(
            '/admin/',
            function () {
                $letters = Letter::all();
                return view(
                        'admin.all-letters',
                        ["letters" => $letters]
                );
            }
    );
    Route::get(
            '/errors/',
            function () {
                return view('errors.503');
            }
    );
    /**
     * Add a letter
     */
    Route::post(
            '/admin/',
            function (Request $request) {
                /**
                 * Validation
                 */
                $validator = Validator::make(
                        $request->all(),
                        [
                                'title' => 'required|max:127',
                                'text' => 'required',
                        ]
                );
                if ($validator->fails()) {
                    return redirect('/admin/')
                            ->withInput()
                            ->withErrors($validator);
                }
                /**
                 * Write to DB
                 */
                $letter = new Letter();
                $letter->title = $request->title;
                $letter->text = $request->text;
                $letter->save();
                /**
                 * Redirect
                 */
                return redirect('/admin/');
            }
    );
    /**
     * Delete the letter
     */
    Route::post(
            '/admin/{letter}',
            function (Letter $letter) {
                /**
                 * Delete
                 */
                $letter->delete();
                /**
                 * Redirect
                 */
                return redirect('/admin/');
            }
    );
    /**
     * Edit
     */
    Route::post(
            '/admin/letter/{letter}',
            function (Letter $letter) {
                return view(
                        'admin.letter.edit',
                        ["letter" => $letter]
                );
            }
    );
    /**
     * Update the letter
     */
    Route::put(
            '/admin/{letter}',
            function (Request $request, Letter $letter) {
                $letter->update($request->all());
                return redirect("/admin/");
            }
    );