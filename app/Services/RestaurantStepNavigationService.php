<?php

namespace App\Services;

class RestaurantStepNavigationService
{
    /**
     * @var int
     */
    private $currentStep;
    
    /**
     * @var int
     */
    private $totalSteps;
    
    /**
     * Constructor
     *
     * @param int $currentStep
     * @param int $totalSteps
     */
    public function __construct(int $currentStep = 1, int $totalSteps = 4)
    {
        $this->currentStep = $currentStep;
        $this->totalSteps = $totalSteps;
    }
    
    /**
     * Get current step
     *
     * @return int
     */
    public function getCurrentStep(): int
    {
        return $this->currentStep;
    }
    
    /**
     * Set current step
     *
     * @param int $step
     * @return void
     */
    public function setCurrentStep(int $step): void
    {
        $this->currentStep = $step;
    }
    
    /**
     * Get total steps
     *
     * @return int
     */
    public function getTotalSteps(): int
    {
        return $this->totalSteps;
    }
    
    /**
     * Navigate to next step
     *
     * @return bool
     */
    public function nextStep(): bool
    {
        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
            return true;
        }
        
        return false;
    }
    
    /**
     * Navigate to previous step
     *
     * @return bool
     */
    public function previousStep(): bool
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
            return true;
        }
        
        return false;
    }
    
    /**
     * Check if on first step
     *
     * @return bool
     */
    public function isFirstStep(): bool
    {
        return $this->currentStep === 1;
    }
    
    /**
     * Check if on last step
     *
     * @return bool
     */
    public function isLastStep(): bool
    {
        return $this->currentStep === $this->totalSteps;
    }
} 