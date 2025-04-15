<?php

namespace App\Services;

use App\Rules\RestaurantRegistration\StepFourRules;
use App\Rules\RestaurantRegistration\StepOneRules;
use App\Rules\RestaurantRegistration\StepThreeRules;
use App\Rules\RestaurantRegistration\StepTwoRules;
use App\Rules\RestaurantRegistration\ValidationRuleInterface;

class RestaurantValidationService
{
    /**
     * Get validation rules for a specific step
     *
     * @param int $step
     * @return array
     */
    public function getStepRules(int $step): array
    {
        $ruleClass = $this->getRuleClassForStep($step);
        
        if ($ruleClass && is_subclass_of($ruleClass, ValidationRuleInterface::class)) {
            return $ruleClass::rules();
        }
        
        return [];
    }
    
    /**
     * Get all validation rules for all steps
     *
     * @return array
     */
    public function getAllRules(): array
    {
        return array_merge(
            StepOneRules::rules(),
            StepTwoRules::rules(),
            StepThreeRules::rules(),
            StepFourRules::rules()
        );
    }
    
    /**
     * Get the rule class for a specific step
     *
     * @param int $step
     * @return string|null
     */
    private function getRuleClassForStep(int $step): ?string
    {
        $ruleMap = [
            1 => StepOneRules::class,
            2 => StepTwoRules::class,
            3 => StepThreeRules::class,
            4 => StepFourRules::class,
        ];
        
        return $ruleMap[$step] ?? null;
    }
} 