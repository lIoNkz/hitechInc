<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Repositories\PhotoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Photo;

class PhotoController extends AppBaseController
{
    /** @var  PhotoRepository */
    private $photoRepository;

    public function __construct(PhotoRepository $photoRepo)
    {
        $this->photoRepository = $photoRepo;
    }

    /**
     * Display a listing of the Photo.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->photoRepository->pushCriteria(new RequestCriteria($request));
        $unsorted = $this->photoRepository->all();
        $photos = $unsorted->sortByDesc('id');

        return view('photos.index')
            ->with('photos', $photos);
    }

    /**
     * Show the form for creating a new Photo.
     *
     * @return Response
     */
    public function create()
    {
        return view('photos.create');
    }

    /**
     * Store a newly created Photo in storage.
     *
     * @param CreatePhotoRequest $request
     *
     * @return Response
     */
    public function store(CreatePhotoRequest $request)
    {
    	$photoable_type = "App\Models\\".$request->photoable_type;
    	array_pull($request,'photoable_type');
    	array_add($request, 'photoable_type', $photoable_type);

        $input = $request->all(); 

        $photo = $this->photoRepository->create($input);

        Flash::success('Photo saved successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Display the specified Photo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        return view('photos.show')->with('photo', $photo);
    }

    /**
     * Show the form for editing the specified Photo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        return view('photos.edit')->with('photo', $photo);
    }

    /**
     * Update the specified Photo in storage.
     *
     * @param  int              $id
     * @param UpdatePhotoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePhotoRequest $request)
    {
        $photo = $this->photoRepository->findWithoutFail($id);

        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        $photo = $this->photoRepository->update($request->all(), $id);

        Flash::success('Photo updated successfully.');

        return redirect(route('photos.index'));
    }

    /**
     * Remove the specified Photo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $photo = $this->photoRepository->findWithoutFail($id);
        
        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        $file = Photo::where('id', $id)->first();
        unlink(public_path('img\\').$file->path);
        $this->photoRepository->delete($id);

        Flash::success('Photo deleted successfully.');

        return redirect(route('photos.index'));
    }

    public function destroy_advantage($id,Request $request)
    {
        $photo = $this->photoRepository->findWithoutFail($id);
        
        if (empty($photo)) {
            Flash::error('Photo not found');

            return redirect(route('photos.index'));
        }

        $file = Photo::where('id', $id)->first();
        unlink(public_path('img\\').$file->path);
        $this->photoRepository->delete($id);

        Flash::success('Photo deleted successfully.');

        return redirect('/advantages/'.$request->advantage);
    }

    public function upload(Request $request)
    {
        $photoable_type = "App\Models\\".$request->photoable_type;
        array_pull($request,'photoable_type');
        array_add($request, 'photoable_type', $photoable_type);

        $input = $request->all(); 

        for($i = 0; $i < count($input['photos']); $i++) {
            
            $input['photoable_id'] = '99999';
            $input['size'] = 'test';


            $image = $request->file('photos')[$i];
            $input2['imagename'] = time().$i.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $input2['imagename']);
            $input['path'] =  $input2['imagename'];


            $photo = $this->photoRepository->create($input);
        }




        Flash::success('Images saved successfully.');
        return redirect(route('photos.index'));
    }



}
