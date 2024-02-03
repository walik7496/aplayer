<?php
namespace app\forms;

use std, gui, framework, app;


class MainForm extends AbstractForm
{

    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    
        if ($this->fileChooser->execute()) {
            $this->slider->enabled = true;
            $this->listView->items->clear();
            $this->listView->items->addAll($this->fileChooser->files);
        }
    }

    /**
     * @event buttonAlt.action 
     */
    function doButtonAltAction(UXEvent $e = null)
    {
        $this->slider->enabled = true;
        $this->label3->text = fs::name($this->listView->selectedItem);
        $this->player->play();
    }

    /**
     * @event button3.action 
     */
    function doButton3Action(UXEvent $e = null)
    {    
        $this->player->pause();
    }

    /**
     * @event button4.action 
     */
    function doButton4Action(UXEvent $e = null)
    {    
        $this->slider->enabled = false;
        $this->player->stop();
    }

    /**
     * @event listView.action 
     */
    function doListViewAction(UXEvent $e = null)
    {    
        $this->player->open($this->listView->selectedItem);
    }

    /**
     * @event slider.mouseDown-Left 
     */
    function doSliderMouseDownLeft(UXMouseEvent $e = null)
    {    
        $this->player->pause();
        $this->player->position = $this->slider->value;
    }

    /**
     * @event slider.mouseUp-Left 
     */
    function doSliderMouseUpLeft(UXMouseEvent $e = null)
    {    
        $this->player->position = $this->slider->value;
        $this->player->play();
    }

    /**
     * @event button5.action 
     */
    function doButton5Action(UXEvent $e = null)
    {    
        alert('This player supports mp3, wav, aif formats.');
    }

    /**
     * @event showing 
     */
    function doShowing(UXWindowEvent $e = null)
    {    
        $this->slider->enabled = false;
    }

    /**
     * @event listView.click-2x 
     */
    function doListViewClick2x(UXMouseEvent $e = null)
    {    
        $this->slider->enabled = true;
        $this->label3->text = fs::name($this->listView->selectedItem);
        $this->player->play();
    }


}
