<?php
App::uses('AppController', 'Controller');
/**
 * Sites Controller
 *
 * @property Site $Site
 */
class SitesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Site->recursive = 0;
		$this->set('sites', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null)
    {
        $this->layout = 'ajax';
		if (!$this->Site->exists($id)) {
			throw new NotFoundException(__('Invalid site'));
		}
		$options = array('conditions' => array('Site.' . $this->Site->primaryKey => $id));
		$this->set('site', $this->Site->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add()
    {
        Configure::write('debug', 0);
        $this->layout = 'ajax';
		if ($this->request->is('post')) {
			$this->Site->create();
            $this->log($this->request->data);
			if ($this->Site->save($this->request->data)) {
                $this->log('saved');
                //$this->Session->setFlash(__('The site has been saved'));
                //$this->redirect(array('action' => 'index'));
            } else {
                //$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
            }
            $this->log($this->validationErrors);
        }
        //$this->render('/elements/ajax_return');
	}

/*
    function noNeed($itemId, $categoryId)
    {
        Configure::write('debug', 0);
        if ($this->RequestHandler->isAjax() && !empty($this->params['form'])) {
            // Check inactive task vaild
            $task = $this->OfferManagementTask->find('first', array(
                'recursive' => -1,
                'conditions' => array(
                    'offer_management_item_id' => $itemId,
                    'offer_management_task_category_id' => $categoryId
                )
            ));
            if (!empty($task)) {
                $this->set('errorMessage', 'このカテゴリにはタスクが存在するので、不要に出来ません。タスクを全て削除して下さい。');
            }
            $item = $this->OfferManagementTask->OfferManagementItem->_getById($itemId);
            $isEditable = $this->_isEditable($item);
            if ($isEditable === 1) {
                // Set data
                $this->data['OfferManagementTask']['offer_management_item_id'] = $itemId;
                $this->data['OfferManagementTask']['offer_management_task_category_id'] = $categoryId;
                unset($this->OfferManagementTask->validate['task_date']['date']);
                $this->data['OfferManagementTask']['task_date'] = '0000-00-00'; // NJSS的には、こう?
                $this->data['OfferManagementTask']['name'] = '不要';
                $this->data['OfferManagementTask']['done'] = 1;
                $this->data['OfferManagementTask']['active'] = 0;
                $this->OfferManagementTask->create();
                if ($this->OfferManagementTask->save($this->data)) {
                    // Get updated data
                    $updatedData = $this->OfferManagementTask->OfferManagementItem->findById($item['OfferManagementItem']['id']);
                    $updatedData['OfferManagementTask'] = $this->OfferManagementTask->OfferManagementItem->categorizeTaskOfItem($updatedData['OfferManagementTask']);
                    $this->set('offerManagementItem', $updatedData);
                    // Get category list
                    $this->set('offerManagementTaskCategories', $this->OfferManagementTask->OfferManagementTaskCategory->find('list'));
                    // Get user list
                    $userIdsOfCompany = $this->OfferManagementTask->OfferManagementItem->User->getUserIdsOfCompany($this->_getUserId());
                    $users = $this->OfferManagementTask->OfferManagementItem->User->find('list', array(
                        'recursive' => -1,
                        'conditions' => array('User.id' => $userIdsOfCompany),
                        'fields' => array('User.name'),
                        'order' => array('User.id')
                    ));
                    $this->set(compact('users'));
                } else {
                    $this->set('errorMessage', 'データを更新できませんでした。');
                }
            } else if ($isEditable === 0) {
                $this->set('errorMessage', "あなたはこの案件情報を編集できません。\n編集（追加・削除）できるのは担当者とNJSSマネージャーのみです。");
            } else if ($isEditable === false) {
                $this->set('errorMessage', "編集しようとしている案件は存在しません。ページを再度読み込んでみて下さい。");
            }
            $this->render('/elements/njssplus/ajax_return');
        } else {
            $this->cakeError('error404');
            return false;
        }
    }
*/
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Site->exists($id)) {
			throw new NotFoundException(__('Invalid site'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Site->save($this->request->data)) {
				$this->Session->setFlash(__('The site has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Site.' . $this->Site->primaryKey => $id));
			$this->request->data = $this->Site->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Site->id = $id;
		if (!$this->Site->exists()) {
			throw new NotFoundException(__('Invalid site'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Site->delete()) {
			$this->Session->setFlash(__('Site deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Site was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
