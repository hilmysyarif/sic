<?php namespace Spatie\Newsletter\MailChimp;

use Spatie\Newsletter\Interfaces\NewsletterInterface;
use Spatie\Newsletter\Interfaces\NewsletterCampaignInterface;
use Spatie\Newsletter\Interfaces\NewsletterListInterface;

class Newsletter implements NewsletterInterface
{
    /**
     * @var NewsletterCampaign
     */
    private $campaign;
    /**
     * @var NewsletterList
     */
    private $list;

    public function __construct(NewsletterCampaignInterface $campaign, NewsletterListInterface $list)
    {
        $this->campaign = $campaign;
        $this->list = $list;
    }

    /**
     * Create a new newsletter campaign.
     *

     * @param $subject
     * @param $content
     * @param $list
     *
     * @return mixed
     */
    public function createCampaign($subject, $content, $list = '')
    {
        return $this->campaign->create($subject, $content, $list);
    }

    /**
     * Subscribe the email address to given list.
     *
     * @param $email
     * @param array $mergeVars
     * @param string $list
     * @return mixed
     */
    public function subscribe($email, $mergeVars = [],  $list = '')
    {
        return $this->list->subscribe($email, $mergeVars, $list);
    }

    /**
     * Unsubscribe the email address to given list.
     *
     * @param $email
     * @param $list
     *
     * @return mixed
     */
    public function unsubscribe($email, $list = '')
    {
        return $this->list->unsubscribe($email, $list);
    }


    /**
     * Get the instance of the underlying api
     *
     * @return mixed
     */
    public function getApi()
    {
        return $this->list->getApi();
    }
}
