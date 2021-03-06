<?php namespace Arcanedev\SeoHelper\Contracts;

/**
 * Interface  SeoHelper
 *
 * @package   Arcanedev\SeoHelper\Contracts
 * @author    ARCANEDEV <arcanedev.maroc@gmail.com>
 */
interface SeoHelper extends Renderable
{
    /* ------------------------------------------------------------------------------------------------
     |  Getters & Setters
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Get SeoMeta instance.
     *
     * @return \Arcanedev\SeoHelper\Contracts\SeoMeta
     */
    public function meta();

    /**
     * Set SeoMeta instance.
     *
     * @param  \Arcanedev\SeoHelper\Contracts\SeoMeta  $seoMeta
     *
     * @return self
     */
    public function setSeoMeta(SeoMeta $seoMeta);

    /**
     * Get SeoOpenGraph instance.
     *
     * @return \Arcanedev\SeoHelper\Contracts\SeoOpenGraph
     */
    public function openGraph();

    /**
     * Get SeoOpenGraph instance (alias).
     *
     * @see  openGraph()
     *
     * @return \Arcanedev\SeoHelper\Contracts\SeoOpenGraph
     */
    public function og();

    /**
     * Get SeoOpenGraph instance.
     *
     * @param  \Arcanedev\SeoHelper\Contracts\SeoOpenGraph  $seoOpenGraph
     *
     * @return self
     */
    public function setSeoOpenGraph(SeoOpenGraph $seoOpenGraph);

    /**
     * Get SeoTwitter instance.
     *
     * @return \Arcanedev\SeoHelper\Contracts\SeoTwitter
     */
    public function twitter();

    /**
     * Set SeoTwitter instance.
     *
     * @param  \Arcanedev\SeoHelper\Contracts\SeoTwitter  $seoTwitter
     *
     * @return self
     */
    public function setSeoTwitter(SeoTwitter $seoTwitter);

    /**
     * Set title.
     *
     * @param  string       $title
     * @param  string|null  $siteName
     * @param  string|null  $separator
     *
     * @return self
     */
    public function setTitle($title, $siteName = null, $separator = null);

    /**
     * Set title.
     *
     * @param  string       $title
     * @param  string|null  $siteName
     * @param  string|null  $separator
     *
     * @return self
     */
    public function setSiteName($siteName);
    /**
     * Set description.
     *
     * @param  string  $description
     *
     * @return self
     */
    public function setDescription($description);

    /**
     * Set keywords.
     *
     * @param  array|string  $keywords
     *
     * @return self
     */
    public function setKeywords($keywords);

    /* ------------------------------------------------------------------------------------------------
     |  Main Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Enable the OpenGraph.
     *
     * @return self
     */
    public function enableOpenGraph();

    /**
     * Disable the OpenGraph.
     *
     * @return self
     */
    public function disableOpenGraph();

    /**
     * Enable the Twitter Card.
     *
     * @return self
     */
    public function enableTwitter();

    /**
     * Disable the Twitter Card.
     *
     * @return self
     */
    public function disableTwitter();
}
