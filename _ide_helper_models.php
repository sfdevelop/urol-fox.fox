<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Model{
/**
 * App\Model\Call
 *
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Call newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Call newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Call query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Call whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Call whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Call whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Call wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Call whereUpdatedAt($value)
 */
	class Call extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Category
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $slug
 * @property string $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Category[] $childrenCategories
 * @property-read int|null $children_categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Model\CategoryTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\CategoryTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Category withTranslation()
 */
	class Category extends \Eloquent implements \Astrotomic\Translatable\Contracts\Translatable, \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Model{
/**
 * App\Model\CategoryTranslation
 *
 * @property int $id
 * @property int $category_id
 * @property string $locale
 * @property string $title
 * @property string|null $description
 * @property string|null $seo_title
 * @property string|null $seo_key
 * @property string|null $seo_description
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CategoryTranslation whereUpdatedAt($value)
 */
	class CategoryTranslation extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Characteristic
 *
 * @property int $id
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Model\CharacteristicTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\CharacteristicTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Characteristic withTranslation()
 */
	class Characteristic extends \Eloquent implements \Astrotomic\Translatable\Contracts\Translatable {}
}

namespace App\Model{
/**
 * App\Model\CharacteristicProduct
 *
 * @property int $id
 * @property int $characteristic_id
 * @property int $product_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Model\Characteristic $characteristic
 * @property-read \App\Model\CharacteristicProductTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\CharacteristicProductTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct whereCharacteristicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProduct withTranslation()
 */
	class CharacteristicProduct extends \Eloquent implements \Astrotomic\Translatable\Contracts\Translatable {}
}

namespace App\Model{
/**
 * App\Model\CharacteristicProductTranslation
 *
 * @property int $id
 * @property int $characteristic_product_id
 * @property string $locale
 * @property string $title_character
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProductTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProductTranslation whereCharacteristicProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProductTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicProductTranslation whereTitleCharacter($value)
 */
	class CharacteristicProductTranslation extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\CharacteristicTranslation
 *
 * @property int $id
 * @property int $characteristic_id
 * @property string $locale
 * @property string $title
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicTranslation whereCharacteristicId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\CharacteristicTranslation whereTitle($value)
 */
	class CharacteristicTranslation extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Contact
 *
 * @property int $id
 * @property string $phone1
 * @property string|null $phone2
 * @property string|null $phone3
 * @property string $email
 * @property string|null $time
 * @property string|null $weekend
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Model\ContactTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\ContactTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact wherePhone1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact wherePhone2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact wherePhone3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact whereWeekend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Contact withTranslation()
 */
	class Contact extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\ContactQuestion
 *
 * @property int $id
 * @property string $title
 * @property string $mail
 * @property string $question
 * @property int $is_see
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion whereIsSee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactQuestion whereUpdatedAt($value)
 */
	class ContactQuestion extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\ContactTranslation
 *
 * @property int $id
 * @property int $contact_id
 * @property string $locale
 * @property string $address
 * @property string|null $weekend
 * @property string|null $time
 * @property string|null $seo_title
 * @property string|null $seo_key
 * @property string|null $seo_description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation whereContactId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ContactTranslation whereWeekend($value)
 */
	class ContactTranslation extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Pages
 *
 * @property int $id
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Model\PagesTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\PagesTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Pages withTranslation()
 */
	class Pages extends \Eloquent implements \Astrotomic\Translatable\Contracts\Translatable, \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Model{
/**
 * App\Model\PagesTranslation
 *
 * @property int $id
 * @property int $pages_id
 * @property string $locale
 * @property string $title
 * @property string|null $description
 * @property string|null $seo_title
 * @property string|null $seo_key
 * @property string|null $seo_description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation wherePagesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PagesTranslation whereTitle($value)
 */
	class PagesTranslation extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Post
 *
 * @property int $id
 * @property int $public
 * @property int $sort
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Model\PostTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\PostTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Post withTranslation()
 */
	class Post extends \Eloquent implements \Astrotomic\Translatable\Contracts\Translatable, \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Model{
/**
 * App\Model\PostTranslation
 *
 * @property int $id
 * @property int $post_id
 * @property string $locale
 * @property string $title
 * @property string|null $description
 * @property string|null $seo_title
 * @property string|null $seo_key
 * @property string|null $seo_description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\PostTranslation whereTitle($value)
 */
	class PostTranslation extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Product
 *
 * @property int $id
 * @property int $category_id
 * @property string $slug
 * @property string|null $articyl
 * @property float $price
 * @property float|null $price_sale
 * @property int $public
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Model\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Model\ProductTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\ProductTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product filter(\App\Http\Filters\FilterInterface $filter)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereArticyl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product wherePriceSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Product withTranslation()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Model\Product withoutTrashed()
 */
	class Product extends \Eloquent implements \Astrotomic\Translatable\Contracts\Translatable, \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Model{
/**
 * App\Model\ProductTranslation
 *
 * @property int $id
 * @property int $product_id
 * @property string $locale
 * @property string $title
 * @property string|null $description
 * @property string|null $seo_title
 * @property string|null $seo_key
 * @property string|null $seo_description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ProductTranslation whereTitle($value)
 */
	class ProductTranslation extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Question
 *
 * @property int $id
 * @property string $title
 * @property string $mail
 * @property string $question
 * @property int $is_see
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question whereIsSee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Question whereUpdatedAt($value)
 */
	class Question extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Service
 *
 * @property int $id
 * @property string $slug
 * @property int $public
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Model\ServiceTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\ServiceTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service findSimilarSlugs($attribute, $config, $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service wherePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Service withTranslation()
 */
	class Service extends \Eloquent implements \Astrotomic\Translatable\Contracts\Translatable, \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Model{
/**
 * App\Model\ServiceTranslation
 *
 * @property int $id
 * @property int $service_id
 * @property string $locale
 * @property string $title
 * @property string|null $description
 * @property string|null $seo_title
 * @property string|null $seo_key
 * @property string|null $seo_description
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\ServiceTranslation whereUpdatedAt($value)
 */
	class ServiceTranslation extends \Eloquent {}
}

namespace App\Model{
/**
 * App\Model\Slider
 *
 * @property int $id
 * @property int $sort
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Model\SliderTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\SliderTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider orWhereTranslation($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider orWhereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider orderByTranslation($translationField, $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider whereTranslation($translationField, $value, $locale = null, $method = 'whereHas', $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider whereTranslationLike($translationField, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\Slider withTranslation()
 */
	class Slider extends \Eloquent implements \Astrotomic\Translatable\Contracts\Translatable, \Spatie\MediaLibrary\HasMedia\HasMedia {}
}

namespace App\Model{
/**
 * App\Model\SliderTranslation
 *
 * @property int $id
 * @property int $slider_id
 * @property string $locale
 * @property string $title
 * @property string|null $slogan
 * @property string|null $seo_title
 * @property string|null $seo_key
 * @property string|null $seo_description
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation whereSeoKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation whereSliderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Model\SliderTranslation whereTitle($value)
 */
	class SliderTranslation extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

