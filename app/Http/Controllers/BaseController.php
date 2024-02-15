<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{

    protected $model, $indexUrl, $moduleName, $viewFolder, $service;

    public function __construct($service)
    {
        $this->service = $service;
    }

    public function moduleName()
    {
        return '';
    }

    public function folderName()
    {
        return '';
    }

    public function storeValidationRequest()
    {
        return '';
    }

    public function moduleToTitle()
    {
        $title = '';
        $data = explode('-', $this->folderName());
        foreach ($data as $d) {
            $title .= $d . ' ';
        }

        return ucwords($title);
    }

    public function defaultRequest()
    {
        return 'Illuminate\Http\Request';
    }

    public function indexUrl()
    {
        return  $this->moduleName();
    }

    public function baseBreadCrumb()
    {
        return [
            'title' => 'Dashboard',
            'link' =>  'home.index',
            'active' => true
        ];
    }

    public function breadCrumbForIndex()
    {
        $breadCrumb = [
            $this->baseBreadCrumb(), [
                'title' => $this->moduleToTitle(),
                'link' => $this->indexUrl(),
            ]
        ];
        return $breadCrumb;
    }

    public function breadCrumbForCreate($title = 'Create')
    {
        $breadCrumb = [
            $this->baseBreadCrumb(),
            [
                'title' => $this->moduleToTitle(),
                'link' => $this->indexUrl() . '.index',
                'active' => true
            ],
            [
                'title' => $title,
            ]
        ];
        return $breadCrumb;
    }

    public function getAllData($keyword)
    {
        return $this->model->where('title', 'ILIKE',  '%' . $keyword . '%')->get();
    }

    public function show(Request $request, $id)
    {
        $data = $this->service->showPageData($request, $id);
        $data['indexUrl'] =  $this->indexUrl();
        $data['moduleName'] = $this->moduleToTitle();
        $data['breadCrumb'] =  $this->breadCrumbForIndex();
        return view('system.' . $this->folderName() . '.show', $data);
    }

    public function index(Request $request)
    {

        $data = $this->service->indexPageData($request);
        $data['indexUrl'] =  $this->indexUrl();
        $data['moduleName'] = $this->moduleToTitle();
        $data['breadCrumb'] =  $this->breadCrumbForIndex();
        return view('system.' . $this->folderName() . '.index', $data);
    }

    public function create(Request $request)
    {
        $data = $this->service->createPageData($request);
        $data['indexUrl'] = $this->indexUrl();
        $data['moduleName'] = $this->moduleToTitle();
        $data['breadCrumb'] = $this->breadCrumbForCreate();
        return view('system.' . $this->folderName() . '.form', $data);
    }

    public function store()
    {
        if (!empty($this->storeValidationRequest())) {
            $request = $this->storeValidationRequest();
        } else {
            $request = $this->defaultRequest();
        }
        $request = app()->make($request);
        $this->service->store($request);
        return redirect()->route($this->indexUrl() . '.index')->with(['success' => $this->moduleName . ' created successfully.']);
    }

    public function update(Request $request, $id)
    {
        if (!empty($this->storeValidationRequest())) {
            $request = $this->storeValidationRequest();
        } else {
            $request = $this->defaultRequest();
        }
        $request = app()->make($request);
        $this->service->update($request, $id);
        return redirect()->route($this->indexUrl() . '.index')->with(['success' => $this->moduleName . ' updated successfully.']);
    }

    public function edit($id)
    {
        $data = $this->service->editPageData($id);
        $data['indexUrl'] = $this->indexUrl();
        $data['moduleName'] = $this->moduleToTitle();
        $data['breadCrumb'] = $this->breadCrumbForCreate($title = 'Edit');
        return view('system.' . $this->folderName() . '.form', $data);
    }


    public function destroy($id)
    {
        $this->service->delete($id);
        return redirect()->route($this->indexUrl() . '.index')->with(['success' => $this->moduleName . ' deleted successfully.']);
    }

    public function changeStatus($id)
    {
        $data = $this->service->getItemById($id);
        $data->update([
            'status' => $data->status === true ? false : true
        ]);
        flash()->options([
            'timeout' => 2000
        ])->addSuccess('Status changed successfully.');
        return redirect()->back();
    }
}
