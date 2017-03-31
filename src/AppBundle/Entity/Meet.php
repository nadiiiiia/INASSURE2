<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meet
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="meet")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MeetRepository")
 */
class Meet {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;

    /**
     * @ORM\Column(name="tel1", type="string")
     */
    private $tel1;

    /**
     * @ORM\Column(name="tel2", type="string")
     */
    private $tel2;

    /**
     * @ORM\Column(name="tel3", type="string")
     */
    private $tel3;

    /**
     * @ORM\Column(name="fax1", type="string")
     */
    private $fax1;

    /**
     * @ORM\Column(name="fax2", type="string")
     */
    private $fax2;

    /**
     * @ORM\Column(name="surname", type="string")
     */
    private $surname;

    /**
     * @ORM\Column(name="adresse", type="string")
     */
    private $adresse;

    /**
     * @ORM\Column(name="ville", type="string")
     */
    private $ville;

    /**
     * @ORM\Column(name="npa", type="string")
     */
    private $npa;

    /**
     * @ORM\Column(name="nom_modif", type="string")
     */
    private $nomModif;

    /**
     * @ORM\Column(name="prenom_modif", type="string")
     */
    private $prenomModif;

    /**
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @ORM\Column(name="age_enfant1", type="integer")
     */
    private $ageEnfant1;

    /**
     * @ORM\Column(name="age_enfant2", type="integer")
     */
    private $ageEnfant2;

    /**
     * @ORM\Column(name="age_enfant3", type="integer")
     */
    private $ageEnfant3;

    /**
     * @ORM\Column(name="age_enfant", type="integer")
     */
    private $ageEnfant4;

    /**
     * @ORM\Column(name="age_conjoint", type="integer")
     */
    private $ageConjoint;

    /**
     * @ORM\Column(name="non_sante", type="integer")
     */
    private $nonSante;

    /**
     * @ORM\Column(name="nom_medicament", type="string")
     */
    private $nomMedicament;

    /**
     * @ORM\Column(name="subside_combien", type="integer")
     */
    private $subsideCombien;

    /**
     * @ORM\Column(name="adrese_modif", type="string")
     */
    private $adreseModif;

    /**
     * @ORM\Column(name="localite_modif", type="string")
     */
    private $localieModif;

    /**
     * @ORM\Column(name="NPA_modif", type="integer")
     */
    private $NPAModif;

    /**
     * @ORM\Column(name="etage_app", type="integer")
     */
    private $etageApp;

    /**
     * @ORM\Column(name="code_acces", type="string")
     */
    private $codeAccess;

    /**
     * @ORM\Column(name="natel", type="integer")
     */
    private $natel;

    /**
     * @ORM\Column(name="commentaire", type="string")
     */
    private $commentaire;

    /**
     * @ORM\Column(name="Mr_caisse_maladie_base", type="integer")
     */
    private $mrCaisseMaladieBase;

    /**
     * @ORM\Column(name="mr_caisse_maladie_LCA", type="integer")
     */
    private $mrCaisseMaladieLCA;

    /**
     * @ORM\Column(name="enfant1_caisse_maladie_base", type="integer")
     */
    private $enfant1CaisseMaladieBase;

    /**
     * @ORM\Column(name="enfant1_caisse_maladie_LCA", type="integer")
     */
    private $enfant1CaisseMaladieLCA;

    /**
     * @ORM\Column(name="enfant2_caisse_maladie_base", type="integer")
     */
    private $enfant2CaisseMaladieBase;

    /**
     * @ORM\Column(name="enfant2_caisse_maladie__LCA", type="integer")
     */
    private $enfant2CaisseMaladieLCA;

    /**
     * @ORM\Column(name="enfant3_caisse_maladie_base", type="integer")
     */
    private $enfant3CaisseMaladieBase;

    /**
     * @ORM\Column(name="enfant3_caisse_maladie_LCA", type="integer")
     */
    private $enfant3CaisseMaladieLCA;

    /**
     * @ORM\Column(name="enfant4_caisse_maladie_base", type="integer")
     */
    private $enfant4CaisseMaladieBase;

    /**
     * @ORM\Column(name="enfant4_caisse_maladie_LCA", type="integer")
     */
    private $enfant4CaisseMaladieLCA;

    /**
     * @ORM\Column(name="navigateur", type="string")
     */
    private $navigateur;

    /**
     * @ORM\Column(name="UserName", type="string")
     */
    private $UserName;

    /**
     * @ORM\Column(name="base_com_modif", type="string")
     */
    private $baseComModif;

    /**
     * @ORM\Column(name="LCA_com_modif", type="string")
     */
    private $lCAComModif;

    /**
     * @ORM\Column(name="situation_familiale_modif", type="string")
     */
    private $situationFamilialeModif;

    /**
     * @ORM\Column(name="nombre_enfant_modif", type="integer")
     */
    private $nombreEnfantModif;

    /**
     * @ORM\Column(name="famille_caisse_maladie_oui", type="boolean")
     */
    private $familleCaisseMaladieOui;

    /**
     * @ORM\Column(name="Mr_caisse_maladie_base_liste", type="string")
     */
    private $mrCaisseMaladieBaseList;

    /**
     * @ORM\Column(name="Mr_caisse_maladie_LCA_liste", type="string")
     */
    private $mrCaisseMaladieLcaList;

    /**
     * @ORM\Column(name="Enfant1_caisse_maladie_base_liste", type="string")
     */
    private $enfant1MaladieCaisseBaseList;

    /**
     * @ORM\Column(name="Enfant1_caisse_maladie_lca_list", type="string")
     */
    private $enfant1MaladieCaisseLcaList;

    /**
     * @ORM\Column(name="Enfant2_caisse_maladie_base_list", type="string")
     */
    private $enfant2MaladieCaisseBaseList;

    /**
     * @ORM\Column(name="Enfant2_caisse_maladie_lca_list", type="string")
     */
    private $enfant2MaladieCaisseLcaList;

    /**
     * @ORM\Column(name="Enfant3_caisse_maladie_base_list", type="string")
     */
    private $enfant3MaladieCaisseBaseList;

    /**
     * @ORM\Column(name="Enfant3_caisse_maladie_lca_list", type="string")
     */
    private $enfant3MaladieCaisseLcaList;

    /**
     * @ORM\Column(name="Enfant4_caisse_maladie_base_list", type="string")
     */
    private $enfant4MaladieCaisseBaseList;

    /**
     * @ORM\Column(name="Enfant4_caisse_maladie_lca_list", type="string")
     */
    private $enfant4MaladieCaisseLcaList;

    /**
     * @ORM\Column(name="sante", type="boolean")
     */
    private $sante;

    /**
     * @ORM\Column(name="consommation_medicam", type="boolean")
     */
    private $consommationMedicam;

    /**
     * @ORM\Column(name="decission", type="string")
     */
    private $decission;

    /**
     * @ORM\Column(name="travaille_mr", type="string")
     */
    private $travailleMr;

    /**
     * @ORM\Column(name="travaille_madame", type="string")
     */
    private $travailleMadame;

    /**
     * @ORM\Column(name="subside_modif", type="boolean")
     */
    private $subsideModif;

    /**
     * @ORM\Column(name="franchise_Mme", type="integer")
     */
    private $franchiseMme;

    /**
     * @ORM\Column(name="Mr_franchise", type="integer")
     */
    private $mrFranchise;

    /**
     * @ORM\Column(name="Enfant1_franchise", type="integer")
     */
    private $enfant1Franchise;

    /**
     * @ORM\Column(name="enfant2_franchise", type="integer")
     */
    private $enfant2Franchise;

    /**
     * @ORM\Column(name="enfant3_franchise", type="integer")
     */
    private $enfant3Franchise;

    /**
     * @ORM\Column(name="enfant4_franchise", type="integer")
     */
    private $enfant4Franchise;

    /**
     * @ORM\Column(name="habitation", type="string")
     */
    private $habitation;

    /**
     * @ORM\Column(name="rdv_prie", type="string")
     */
    private $rdvPrie;

    /**
     * @ORM\Column(name="CMK_S_FIELD_INDICE_CONTACT", type="integer")
     */
    private $cmkSIndiceContact;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TELEPHONE_COMPOSE", type="integer")
     */
    private $cmkSTelifConpose;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DATE_DEBUT_TRAITEMENT", type="date")
     */
    private $cmkSfieldfDStartTreatment;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DATEHEURETRAITEMENT", type="date")
     */
    private $cmkSfieldfDHTreatment;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DATETRAITEMENT", type="date")
     */
    private $cmkSfieldfDTreatment;

    /**
     * @ORM\Column(name="CMK_S_FIELD_HEURETRAITEMENT", type="string")
     */
    private $cmkSfieldfHTreatment;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DATEHEURE_RACCROCHE", type="date")
     */
    private $cmkSfieldfDHRacroche;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DATE_DEBUT_RACCROCHE", type="date")
     */
    private $cmkSfieldfDStartRacroche;

    /**
     * @ORM\Column(name="CMK_S_FIELD_HEURE_DEBUT_RACCROCHE", type="date")
     */
    private $cmkSfieldfHStartRacroche;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DATEHEURE_DEBUT_RAPPEL_PREVU", type="date")
     */
    private $cmkSfieldfDHStartRecallPlanned;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DATE_DEBUT_RAPPEL_PREVU", type="date")
     */
    private $cmkSfieldfDStartRecallPlanned;

    /**
     * @ORM\Column(name="CMK_S_FIELD_HEURE_DEBUT_RAPPEL_PREVU", type="date")
     */
    private $cmkSfieldfHStartRecallPlanned;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DUREE_APPEL", type="integer")
     */
    private $cmkSfieldAppelDuration;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DUREE_ATTENTE", type="integer")
     */
    private $cmkSfieldWaitingDuration;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DUREE_COMMUNICATION", type="integer")
     */
    private $cmkSfieldAppelCommunicationDuration;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DUREE_POST_APPEL", type="integer")
     */
    private $cmkSfieldPostAppelDuration;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DUREE_TRAITEMENT", type="integer")
     */
    private $cmkSfieldTreatmentDuration;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DUREE_PRODUCTION", type="integer")
     */
    private $cmkSfieldProductionDuration;

    /**
     * @ORM\Column(name="CMK_S_FIELD_NOMCAMPAGNE", type="string")
     */
    private $cmkSfieldNameCompany;

    /**
     * @ORM\Column(name="CMK_S_FIELD_NOMFICHIER", type="string")
     */
    private $cmkSfieldNameFile;

    /**
     * @ORM\Column(name="CMK_S_FIELD_QUALIFICATION_MERE", type="string")
     */
    private $cmkSfieldQualificationM;

    /**
     * @ORM\Column(name="CMK_S_FIELD_QUALIFICATION", type="string")
     */
    private $cmkSfieldQualification;

    /**
     * @ORM\Column(name="CMK_S_FIELD_CODE_QUALIFICATION", type="integer")
     */
    private $cmkSfieldQualificationCode;

    /**
     * @ORM\Column(name="CMK_S_FIELD_COMMENTAIRES", type="integer")
     */
    private $cmkSfieldComment;

    /**
     * @ORM\Column(name="CMK_S_FIELD_NUM_IMPORT", type="string")
     */
    private $cmkSfieldNumImport;

    /**
     * @ORM\Column(name="CMK_S_FIELD_NOM_IMPORT", type="string")
     */
    private $cmkSfieldNameImport;

    /**
     * @ORM\Column(name="CMK_S_FIELD_DATE_IMPORT", type="date")
     */
    private $cmkSfieldDateImport;

    /**
     * @ORM\Column(name="CMK_S_FIELD_AGENT_NOM", type="string")
     */
    private $cmkSfieldAgentName;

    /**
     * @ORM\Column(name="CMK_S_FIELD_AGENT_LOGIN", type="string")
     */
    private $cmkSfieldAgentLogin;

    /**
     * @ORM\Column(name="CMK_S_FIELD_POSTE_AGENT", type="string")
     */
    private $cmkSfieldAgentPost;

    /**
     * @ORM\Column(name="CMK_S_FIELD_INDICE_AGENT", type="integer")
     */
    private $cmkSfieldAgentIndex;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_1", type="integer")
     */
    private $cmkSfieldTentative1;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_2", type="integer")
     */
    private $cmkSfieldTentative2;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_3", type="integer")
     */
    private $cmkSfieldTentative3;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_4", type="integer")
     */
    private $cmkSfieldTentative4;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_5", type="integer")
     */
    private $cmkSfieldTentative5;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_6", type="integer")
     */
    private $cmkSfieldTentative6;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_7", type="integer")
     */
    private $cmkSfieldTentative7;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_8", type="integer")
     */
    private $cmkSfieldTentative8;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_9", type="integer")
     */
    private $cmkSfieldTentative9;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_10", type="integer")
     */
    private $cmkSfieldTentative10;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_11", type="integer")
     */
    private $cmkSfieldTentative11;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_12", type="integer")
     */
    private $cmkSfieldTentative12;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_13", type="integer")
     */
    private $cmkSfieldTentative13;

    /**
     * @ORM\Column(name="cCMK_S_FIELD_TENTATIVES_14", type="integer")
     */
    private $cmkSfieldTentative14;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_15", type="integer")
     */
    private $cmkSfieldTentative15;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_16", type="integer")
     */
    private $cmkSfieldTentative16;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_17", type="integer")
     */
    private $cmkSfieldTentative17;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_18", type="integer")
     */
    private $cmkSfieldTentative18;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_19", type="integer")
     */
    private $cmkSfieldTentative19;

    /**
     * @ORM\Column(name="CMK_S_FIELD_TENTATIVES_20", type="integer")
     */
    private $cmkSfieldTentative20;

    /**
     * @ORM\Column(name="CMK_S_FIELD_COMMERCIAL_NOM", type="string")
     */
    private $cmkSfieldNameCommercial;

    /**
     * @ORM\Column(name="CMK_S_FIELD_COMMERCIAL_DATE", type="date")
     */
    private $cmkSfieldDateCommercial;

    /**
     * @ORM\Column(name="CMK_S_FIELD_COMMERCIAL_RDV_HEUREMINUTE", type="integer")
     */
    private $cmkSfieldHMRdvCommercial;

    /**
     * @ORM\Column(name="CMK_S_FIELD_COMMERCIAL_RDV_HEURE", type="integer")
     */
    private $cmkSfieldHRdvCommercial;

    /**
     * @ORM\Column(name="CMK_S_FIELD_COMMERCIAL_RDV_MINUTE", type="integer")
     */
    private $cmkSfieldMRdvCommercial;

    /**
     * @ORM\Column(name="CMK_S_FIELD_COMMERCIAL_RDV_OBSERVATION", type="string")
     */
    private $cmkSfieldObservationRdvCommercial;

    /**
     * @ORM\Column(name="CMK_S_FIELD_COMMERCIAL_RDV_ETAT", type="string")
     */
    private $cmkSfieldStateRdvCommercial;

    /**
     * @ORM\Column(name="cmk_nom_fichier", type="string")
     */
    private $cmkNameFile;

    /**
     * @ORM\Column(name="cmk_nom_commercial", type="string")
     */
    private $cmkNameCommecial;

    /**
     * @ORM\Column(name="cmk_date_prise_comm", type="date")
     */
    private $cmkTakingDateCommecial;

    /**
     * @ORM\Column(name="cmk_date_rdv_comm", type="string")
     */
    private $cmkRdvDateCommecial;

    /**
     * @ORM\Column(name="cmk_observation_comm", type="date")
     */
    private $cmkObservationCommecial;

    /**
     * @ORM\Column(name="ref_contact_crm", type="integer")
     */
    private $refContactCommecial;

    /**
     * @ORM\Column(name="tel_crm", type="integer")
     */
    private $telifCommecial;

    /**
     * @ORM\Column(name="poste_crm", type="string")
     */
    private $postCommecial;

    /**
     * @ORM\Column(name="agent_crm", type="string")
     */
    private $agentCommecial;

    /**
     * @ORM\Column(name="login_agent_crm", type="string")
     */
    private $loginAgentCommecial;

    /**
     * @ORM\Column(name="qualification_commercial", type="string")
     */
    private $qualificationCommecial;

    /**
     * @ORM\Column(name="observation_commercial", type="string")
     */
    private $observationCommecial;

    /**
     * @ORM\Column(name="date_start_commercial", type="date")
     */
    private $dateStartCommecial;

    /**
     * @ORM\Column(name="date_end_commercial", type="date")
     */
    private $dateEndCommecial;

    /**
     * @ORM\Column(name="duration_commercial", type="integer")
     */
    private $durationCommecial;

    /**
     * @ORM\Column(name="duration_call_commercial", type="integer")
     */
    private $durationCallCommecial;

    /**
     * @ORM\Column(name="agent_id", type="string")
     */
    private $agentId;

    /**
     * @ORM\Column(name="customer_id",type="string")
     */
    private $customerId;
 
    /**
     * @ORM\Column(name="modified_at", type="datetime")
     */
    private $modifiedAt;
    
    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
    
    /**
     * @ORM\Column(name="created_by",type="string")
     */
    private $createdBy;
    
    
    /**
     * @ORM\Column(name="updated_by",type="string")
     */
    private $updatedBy;
    
    /*
     * @var boolean
     */
    private $isDouble;
    /**
     * User constructor.
     * @param int $id */
    public function __construct() {
        
    }

    /**
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps() {
        $this->setModifiedAt(new \DateTime(date('Y-m-d H:i:s')));

        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
        }
    }

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNom() {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getTel1() {
        return $this->tel1;
    }

    /**
     * @return mixed
     */
    public function getTel2() {
        return $this->tel2;
    }

    /**
     * @return mixed
     */
    public function getTel3() {
        return $this->tel3;
    }

    /**
     * @return mixed
     */
    public function getFax1() {
        return $this->fax1;
    }

    /**
     * @return mixed
     */
    public function getFax2() {
        return $this->fax2;
    }

    /**
     * @return mixed
     */
    public function getSurname() {
        return $this->surname;
    }

    /**
     * @return mixed
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * @return mixed
     */
    public function getVille() {
        return $this->ville;
    }

    /**
     * @return mixed
     */
    public function getNpa() {
        return $this->npa;
    }

    /**
     * @return mixed
     */
    public function getNomModif() {
        return $this->nomModif;
    }

    /**
     * @return mixed
     */
    public function getPrenomModif() {
        return $this->prenomModif;
    }

    /**
     * @return mixed
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getAgeEnfant1() {
        return $this->ageEnfant1;
    }

    /**
     * @return mixed
     */
    public function getAgeEnfant2() {
        return $this->ageEnfant2;
    }

    /**
     * @return mixed
     */
    public function getAgeEnfant3() {
        return $this->ageEnfant3;
    }

    /**
     * @return mixed
     */
    public function getAgeEnfant4() {
        return $this->ageEnfant4;
    }

    /**
     * @return mixed
     */
    public function getAgeConjoint() {
        return $this->ageConjoint;
    }

    /**
     * @return mixed
     */
    public function getNonSante() {
        return $this->nonSante;
    }

    /**
     * @return mixed
     */
    public function getNomMedicament() {
        return $this->nomMedicament;
    }

    /**
     * @return mixed
     */
    public function getSubsideCombien() {
        return $this->subsideCombien;
    }

    /**
     * @return mixed
     */
    public function getAdreseModif() {
        return $this->adreseModif;
    }

    /**
     * @return mixed
     */
    public function getLocalieModif() {
        return $this->localieModif;
    }

    /**
     * @return mixed
     */
    public function getNPAModif() {
        return $this->NPAModif;
    }

    /**
     * @return mixed
     */
    public function getEtageApp() {
        return $this->etageApp;
    }

    /**
     * @return mixed
     */
    public function getCodeAccess() {
        return $this->codeAccess;
    }

    /**
     * @return mixed
     */
    public function getNatel() {
        return $this->natel;
    }

    /**
     * @return mixed
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * @return mixed
     */
    public function getMrCaisseMaladieBase() {
        return $this->mrCaisseMaladieBase;
    }

    /**
     * @return mixed
     */
    public function getMrCaisseMaladieLCA() {
        return $this->mrCaisseMaladieLCA;
    }

    /**
     * @return mixed
     */
    public function getEnfant1CaisseMaladieBase() {
        return $this->enfant1CaisseMaladieBase;
    }

    /**
     * @return mixed
     */
    public function getEnfant1CaisseMaladieLCA() {
        return $this->enfant1CaisseMaladieLCA;
    }

    /**
     * @return mixed
     */
    public function getEnfant2CaisseMaladieBase() {
        return $this->enfant2CaisseMaladieBase;
    }

    /**
     * @return mixed
     */
    public function getEnfant2CaisseMaladieLCA() {
        return $this->enfant2CaisseMaladieLCA;
    }

    /**
     * @return mixed
     */
    public function getEnfant3CaisseMaladieBase() {
        return $this->enfant3CaisseMaladieBase;
    }

    /**
     * @return mixed
     */
    public function getEnfant3CaisseMaladieLCA() {
        return $this->enfant3CaisseMaladieLCA;
    }

    /**
     * @return mixed
     */
    public function getEnfant4CaisseMaladieBase() {
        return $this->enfant4CaisseMaladieBase;
    }

    /**
     * @return mixed
     */
    public function getEnfant4CaisseMaladieLCA() {
        return $this->enfant4CaisseMaladieLCA;
    }

    /**
     * @return mixed
     */
    public function getNavigateur() {
        return $this->navigateur;
    }

    /**
     * @return mixed
     */
    public function getUserName() {
        return $this->UserName;
    }

    /**
     * @return mixed
     */
    public function getBaseComModif() {
        return $this->baseComModif;
    }

    /**
     * @return mixed
     */
    public function getLCAComModif() {
        return $this->lCAComModif;
    }

    /**
     * @return mixed
     */
    public function getSituationFamilialeModif() {
        return $this->situationFamilialeModif;
    }

    /**
     * @return mixed
     */
    public function getNombreEnfantModif() {
        return $this->nombreEnfantModif;
    }

    /**
     * @return mixed
     */
    public function getFamilleCaisseMaladieOui() {
        return $this->familleCaisseMaladieOui;
    }

    /**
     * @return mixed
     */
    public function getMrCaisseMaladieBaseList() {
        return $this->mrCaisseMaladieBaseList;
    }

    /**
     * @return mixed
     */
    public function getMrCaisseMaladieLcaList() {
        return $this->mrCaisseMaladieLcaList;
    }

    /**
     * @return mixed
     */
    public function getEnfant1MaladieCaisseBaseList() {
        return $this->enfant1MaladieCaisseBaseList;
    }

    /**
     * @return mixed
     */
    public function getEnfant1MaladieCaisseLcaList() {
        return $this->enfant1MaladieCaisseLcaList;
    }

    /**
     * @return mixed
     */
    public function getEnfant2MaladieCaisseBaseList() {
        return $this->enfant2MaladieCaisseBaseList;
    }

    /**
     * @return mixed
     */
    public function getEnfant2MaladieCaisseLcaList() {
        return $this->enfant2MaladieCaisseLcaList;
    }

    /**
     * @return mixed
     */
    public function getEnfant3MaladieCaisseBaseList() {
        return $this->enfant3MaladieCaisseBaseList;
    }

    /**
     * @return mixed
     */
    public function getEnfant3MaladieCaisseLcaList() {
        return $this->enfant3MaladieCaisseLcaList;
    }

    /**
     * @return mixed
     */
    public function getEnfant4MaladieCaisseBaseList() {
        return $this->enfant4MaladieCaisseBaseList;
    }

    /**
     * @return mixed
     */
    public function getEnfant4MaladieCaisseLcaList() {
        return $this->enfant4MaladieCaisseLcaList;
    }

    /**
     * @return mixed
     */
    public function getSante() {
        return $this->sante;
    }

    /**
     * @return mixed
     */
    public function getConsommationMedicam() {
        return $this->consommationMedicam;
    }

    /**
     * @return mixed
     */
    public function getDecission() {
        return $this->decission;
    }

    /**
     * @return mixed
     */
    public function getTravailleMr() {
        return $this->travailleMr;
    }

    /**
     * @return mixed
     */
    public function getTravailleMadame() {
        return $this->travailleMadame;
    }

    /**
     * @return mixed
     */
    public function getSubsideModif() {
        return $this->subsideModif;
    }

    /**
     * @return mixed
     */
    public function getFranchiseMme() {
        return $this->franchiseMme;
    }

    /**
     * @return mixed
     */
    public function getMrFranchise() {
        return $this->mrFranchise;
    }

    /**
     * @return mixed
     */
    public function getEnfant1Franchise() {
        return $this->enfant1Franchise;
    }

    /**
     * @return mixed
     */
    public function getEnfant2Franchise() {
        return $this->enfant2Franchise;
    }

    /**
     * @return mixed
     */
    public function getEnfant3Franchise() {
        return $this->enfant3Franchise;
    }

    /**
     * @return mixed
     */
    public function getEnfant4Franchise() {
        return $this->enfant4Franchise;
    }

    /**
     * @return mixed
     */
    public function getHabitation() {
        return $this->habitation;
    }

    /**
     * @return mixed
     */
    public function getRdvPrie() {
        return $this->rdvPrie;
    }

    /**
     * @return mixed
     */
    public function getCmkSIndiceContact() {
        return $this->cmkSIndiceContact;
    }

    /**
     * @return mixed
     */
    public function getCmkSTelifConpose() {
        return $this->cmkSTelifConpose;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfDStartTreatment() {
        return $this->cmkSfieldfDStartTreatment;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfDHTreatment() {
        return $this->cmkSfieldfDHTreatment;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfDTreatment() {
        return $this->cmkSfieldfDTreatment;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfHTreatment() {
        return $this->cmkSfieldfHTreatment;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfDHRacroche() {
        return $this->cmkSfieldfDHRacroche;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfDStartRacroche() {
        return $this->cmkSfieldfDStartRacroche;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfHStartRacroche() {
        return $this->cmkSfieldfHStartRacroche;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfDHStartRecallPlanned() {
        return $this->cmkSfieldfDHStartRecallPlanned;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfDStartRecallPlanned() {
        return $this->cmkSfieldfDStartRecallPlanned;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldfHStartRecallPlanned() {
        return $this->cmkSfieldfHStartRecallPlanned;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldAppelDuration() {
        return $this->cmkSfieldAppelDuration;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldWaitingDuration() {
        return $this->cmkSfieldWaitingDuration;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldAppelCommunicationDuration() {
        return $this->cmkSfieldAppelCommunicationDuration;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldPostAppelDuration() {
        return $this->cmkSfieldPostAppelDuration;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTreatmentDuration() {
        return $this->cmkSfieldTreatmentDuration;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldProductionDuration() {
        return $this->cmkSfieldProductionDuration;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldNameCompany() {
        return $this->cmkSfieldNameCompany;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldNameFile() {
        return $this->cmkSfieldNameFile;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldQualificationM() {
        return $this->cmkSfieldQualificationM;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldQualification() {
        return $this->cmkSfieldQualification;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldQualificationCode() {
        return $this->cmkSfieldQualificationCode;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldComment() {
        return $this->cmkSfieldComment;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldNumImport() {
        return $this->cmkSfieldNumImport;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldNameImport() {
        return $this->cmkSfieldNameImport;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldDateImport() {
        return $this->cmkSfieldDateImport;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldAgentName() {
        return $this->cmkSfieldAgentName;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldAgentLogin() {
        return $this->cmkSfieldAgentLogin;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldAgentPost() {
        return $this->cmkSfieldAgentPost;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldAgentIndex() {
        return $this->cmkSfieldAgentIndex;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative1() {
        return $this->cmkSfieldTentative1;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative2() {
        return $this->cmkSfieldTentative2;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative3() {
        return $this->cmkSfieldTentative3;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative4() {
        return $this->cmkSfieldTentative4;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative5() {
        return $this->cmkSfieldTentative5;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative6() {
        return $this->cmkSfieldTentative6;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative7() {
        return $this->cmkSfieldTentative7;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative8() {
        return $this->cmkSfieldTentative8;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative9() {
        return $this->cmkSfieldTentative9;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative10() {
        return $this->cmkSfieldTentative10;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative11() {
        return $this->cmkSfieldTentative11;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative12() {
        return $this->cmkSfieldTentative12;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative13() {
        return $this->cmkSfieldTentative13;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative14() {
        return $this->cmkSfieldTentative14;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative15() {
        return $this->cmkSfieldTentative15;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative16() {
        return $this->cmkSfieldTentative16;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative17() {
        return $this->cmkSfieldTentative17;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative18() {
        return $this->cmkSfieldTentative18;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative19() {
        return $this->cmkSfieldTentative19;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldTentative20() {
        return $this->cmkSfieldTentative20;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldNameCommercial() {
        return $this->cmkSfieldNameCommercial;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldDateCommercial() {
        return $this->cmkSfieldDateCommercial;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldHMRdvCommercial() {
        return $this->cmkSfieldHMRdvCommercial;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldHRdvCommercial() {
        return $this->cmkSfieldHRdvCommercial;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldMRdvCommercial() {
        return $this->cmkSfieldMRdvCommercial;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldObservationRdvCommercial() {
        return $this->cmkSfieldObservationRdvCommercial;
    }

    /**
     * @return mixed
     */
    public function getCmkSfieldStateRdvCommercial() {
        return $this->cmkSfieldStateRdvCommercial;
    }

    /**
     * @return mixed
     */
    public function getCmkNameFile() {
        return $this->cmkNameFile;
    }

    /**
     * @return mixed
     */
    public function getCmkNameCommecial() {
        return $this->cmkNameCommecial;
    }

    /**
     * @return mixed
     */
    public function getCmkTakingDateCommecial() {
        return $this->cmkTakingDateCommecial;
    }

    /**
     * @return mixed
     */
    public function getCmkRdvDateCommecial() {
        return $this->cmkRdvDateCommecial;
    }

    /**
     * @return mixed
     */
    public function getCmkObservationCommecial() {
        return $this->cmkObservationCommecial;
    }

    /**
     * @return mixed
     */
    public function getRefContactCommecial() {
        return $this->refContactCommecial;
    }

    /**
     * @return mixed
     */
    public function getTelifCommecial() {
        return $this->telifCommecial;
    }

    /**
     * @return mixed
     */
    public function getPostCommecial() {
        return $this->postCommecial;
    }

    /**
     * @return mixed
     */
    public function getAgentCommecial() {
        return $this->agentCommecial;
    }

    /**
     * @return mixed
     */
    public function getLoginAgentCommecial() {
        return $this->loginAgentCommecial;
    }

    /**
     * @return mixed
     */
    public function getQualificationCommecial() {
        return $this->qualificationCommecial;
    }

    /**
     * @return mixed
     */
    public function getObservationCommecial() {
        return $this->observationCommecial;
    }

    /**
     * @return mixed
     */
    public function getDateStartCommecial() {
        return $this->dateStartCommecial;
    }

    /**
     * @return mixed
     */
    public function getDateEndCommecial() {
        return $this->dateEndCommecial;
    }

    /**
     * @return mixed
     */
    public function getDurationCommecial() {
        return $this->durationCommecial;
    }

    /**
     * @return mixed
     */
    public function getDurationCallCommecial() {
        return $this->durationCallCommecial;
    }

    /**
     * @return mixed
     */
    public function getAgentId() {
        return $this->agentId;
    }

    /**
     * @return mixed
     */
    public function getCustomerId() {
        return $this->customerId;
    }

    /**
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom) {
        $this->nom = $nom;
    }

    /**
     * @param mixed $tel1
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
    }

    /**
     * @param mixed $tel2
     */
    public function setTel2($tel2) {
        $this->tel2 = $tel2;
    }

    /**
     * @param mixed $tel3
     */
    public function setTel3($tel3) {
        $this->tel3 = $tel3;
    }

    /**
     * @param mixed $fax1
     */
    public function setFax1($fax1) {
        $this->fax1 = $fax1;
    }

    /**
     * @param mixed $fax2
     */
    public function setFax2($fax2) {
        $this->fax2 = $fax2;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname) {
        $this->surname = $surname;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville) {
        $this->ville = $ville;
    }

    /**
     * @param mixed $npa
     */
    public function setNpa($npa) {
        $this->npa = $npa;
    }

    /**
     * @param mixed $nomModif
     */
    public function setNomModif($nomModif) {
        $this->nomModif = $nomModif;
    }

    /**
     * @param mixed $prenomModif
     */
    public function setPrenomModif($prenomModif) {
        $this->prenomModif = $prenomModif;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age) {
        $this->age = $age;
    }

    /**
     * @param mixed $ageEnfant1
     */
    public function setAgeEnfant1($ageEnfant1) {
        $this->ageEnfant1 = $ageEnfant1;
    }

    /**
     * @param mixed $ageEnfant2
     */
    public function setAgeEnfant2($ageEnfant2) {
        $this->ageEnfant2 = $ageEnfant2;
    }

    /**
     * @param mixed $ageEnfant3
     */
    public function setAgeEnfant3($ageEnfant3) {
        $this->ageEnfant3 = $ageEnfant3;
    }

    /**
     * @param mixed $ageEnfant4
     */
    public function setAgeEnfant4($ageEnfant4) {
        $this->ageEnfant4 = $ageEnfant4;
    }

    /**
     * @param mixed $ageConjoint
     */
    public function setAgeConjoint($ageConjoint) {
        $this->ageConjoint = $ageConjoint;
    }

    /**
     * @param mixed $nonSante
     */
    public function setNonSante($nonSante) {
        $this->nonSante = $nonSante;
    }

    /**
     * @param mixed $nomMedicament
     */
    public function setNomMedicament($nomMedicament) {
        $this->nomMedicament = $nomMedicament;
    }

    /**
     * @param mixed $subsideCombien
     */
    public function setSubsideCombien($subsideCombien) {
        $this->subsideCombien = $subsideCombien;
    }

    /**
     * @param mixed $adreseModif
     */
    public function setAdreseModif($adreseModif) {
        $this->adreseModif = $adreseModif;
    }

    /**
     * @param mixed $localieModif
     */
    public function setLocalieModif($localieModif) {
        $this->localieModif = $localieModif;
    }

    /**
     * @param mixed $NPAModif
     */
    public function setNPAModif($NPAModif) {
        $this->NPAModif = $NPAModif;
    }

    /**
     * @param mixed $etageApp
     */
    public function setEtageApp($etageApp) {
        $this->etageApp = $etageApp;
    }

    /**
     * @param mixed $codeAccess
     */
    public function setCodeAccess($codeAccess) {
        $this->codeAccess = $codeAccess;
    }

    /**
     * @param mixed $natel
     */
    public function setNatel($natel) {
        $this->natel = $natel;
    }

    /**
     * @param mixed $commentaire
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    /**
     * @param mixed $mrCaisseMaladieBase
     */
    public function setMrCaisseMaladieBase($mrCaisseMaladieBase) {
        $this->mrCaisseMaladieBase = $mrCaisseMaladieBase;
    }

    /**
     * @param mixed $mrCaisseMaladieLCA
     */
    public function setMrCaisseMaladieLCA($mrCaisseMaladieLCA) {
        $this->mrCaisseMaladieLCA = $mrCaisseMaladieLCA;
    }

    /**
     * @param mixed $enfant1CaisseMaladieBase
     */
    public function setEnfant1CaisseMaladieBase($enfant1CaisseMaladieBase) {
        $this->enfant1CaisseMaladieBase = $enfant1CaisseMaladieBase;
    }

    /**
     * @param mixed $enfant1CaisseMaladieLCA
     */
    public function setEnfant1CaisseMaladieLCA($enfant1CaisseMaladieLCA) {
        $this->enfant1CaisseMaladieLCA = $enfant1CaisseMaladieLCA;
    }

    /**
     * @param mixed $enfant2CaisseMaladieBase
     */
    public function setEnfant2CaisseMaladieBase($enfant2CaisseMaladieBase) {
        $this->enfant2CaisseMaladieBase = $enfant2CaisseMaladieBase;
    }

    /**
     * @param mixed $enfant2CaisseMaladieLCA
     */
    public function setEnfant2CaisseMaladieLCA($enfant2CaisseMaladieLCA) {
        $this->enfant2CaisseMaladieLCA = $enfant2CaisseMaladieLCA;
    }

    /**
     * @param mixed $enfant3CaisseMaladieBase
     */
    public function setEnfant3CaisseMaladieBase($enfant3CaisseMaladieBase) {
        $this->enfant3CaisseMaladieBase = $enfant3CaisseMaladieBase;
    }

    /**
     * @param mixed $enfant3CaisseMaladieLCA
     */
    public function setEnfant3CaisseMaladieLCA($enfant3CaisseMaladieLCA) {
        $this->enfant3CaisseMaladieLCA = $enfant3CaisseMaladieLCA;
    }

    /**
     * @param mixed $enfant4CaisseMaladieBase
     */
    public function setEnfant4CaisseMaladieBase($enfant4CaisseMaladieBase) {
        $this->enfant4CaisseMaladieBase = $enfant4CaisseMaladieBase;
    }

    /**
     * @param mixed $enfant4CaisseMaladieLCA
     */
    public function setEnfant4CaisseMaladieLCA($enfant4CaisseMaladieLCA) {
        $this->enfant4CaisseMaladieLCA = $enfant4CaisseMaladieLCA;
    }

    /**
     * @param mixed $navigateur
     */
    public function setNavigateur($navigateur) {
        $this->navigateur = $navigateur;
    }

    /**
     * @param mixed $UserName
     */
    public function setUserName($UserName) {
        $this->UserName = $UserName;
    }

    /**
     * @param mixed $baseComModif
     */
    public function setBaseComModif($baseComModif) {
        $this->baseComModif = $baseComModif;
    }

    /**
     * @param mixed $lCAComModif
     */
    public function setLCAComModif($lCAComModif) {
        $this->lCAComModif = $lCAComModif;
    }

    /**
     * @param mixed $situationFamilialeModif
     */
    public function setSituationFamilialeModif($situationFamilialeModif) {
        $this->situationFamilialeModif = $situationFamilialeModif;
    }

    /**
     * @param mixed $nombreEnfantModif
     */
    public function setNombreEnfantModif($nombreEnfantModif) {
        $this->nombreEnfantModif = $nombreEnfantModif;
    }

    /**
     * @param mixed $familleCaisseMaladieOui
     */
    public function setFamilleCaisseMaladieOui($familleCaisseMaladieOui) {
        $this->familleCaisseMaladieOui = $familleCaisseMaladieOui;
    }

    /**
     * @param mixed $mrCaisseMaladieBaseList
     */
    public function setMrCaisseMaladieBaseList($mrCaisseMaladieBaseList) {
        $this->mrCaisseMaladieBaseList = $mrCaisseMaladieBaseList;
    }

    /**
     * @param mixed $mrCaisseMaladieLcaList
     */
    public function setMrCaisseMaladieLcaList($mrCaisseMaladieLcaList) {
        $this->mrCaisseMaladieLcaList = $mrCaisseMaladieLcaList;
    }

    /**
     * @param mixed $enfant1MaladieCaisseBaseList
     */
    public function setEnfant1MaladieCaisseBaseList($enfant1MaladieCaisseBaseList) {
        $this->enfant1MaladieCaisseBaseList = $enfant1MaladieCaisseBaseList;
    }

    /**
     * @param mixed $enfant1MaladieCaisseLcaList
     */
    public function setEnfant1MaladieCaisseLcaList($enfant1MaladieCaisseLcaList) {
        $this->enfant1MaladieCaisseLcaList = $enfant1MaladieCaisseLcaList;
    }

    /**
     * @param mixed $enfant2MaladieCaisseBaseList
     */
    public function setEnfant2MaladieCaisseBaseList($enfant2MaladieCaisseBaseList) {
        $this->enfant2MaladieCaisseBaseList = $enfant2MaladieCaisseBaseList;
    }

    /**
     * @param mixed $enfant2MaladieCaisseLcaList
     */
    public function setEnfant2MaladieCaisseLcaList($enfant2MaladieCaisseLcaList) {
        $this->enfant2MaladieCaisseLcaList = $enfant2MaladieCaisseLcaList;
    }

    /**
     * @param mixed $enfant3MaladieCaisseBaseList
     */
    public function setEnfant3MaladieCaisseBaseList($enfant3MaladieCaisseBaseList) {
        $this->enfant3MaladieCaisseBaseList = $enfant3MaladieCaisseBaseList;
    }

    /**
     * @param mixed $enfant3MaladieCaisseLcaList
     */
    public function setEnfant3MaladieCaisseLcaList($enfant3MaladieCaisseLcaList) {
        $this->enfant3MaladieCaisseLcaList = $enfant3MaladieCaisseLcaList;
    }

    /**
     * @param mixed $enfant4MaladieCaisseBaseList
     */
    public function setEnfant4MaladieCaisseBaseList($enfant4MaladieCaisseBaseList) {
        $this->enfant4MaladieCaisseBaseList = $enfant4MaladieCaisseBaseList;
    }

    /**
     * @param mixed $enfant4MaladieCaisseLcaList
     */
    public function setEnfant4MaladieCaisseLcaList($enfant4MaladieCaisseLcaList) {
        $this->enfant4MaladieCaisseLcaList = $enfant4MaladieCaisseLcaList;
    }

    /**
     * @param mixed $sante
     */
    public function setSante($sante) {
        $this->sante = $sante;
    }

    /**
     * @param mixed $consommationMedicam
     */
    public function setConsommationMedicam($consommationMedicam) {
        $this->consommationMedicam = $consommationMedicam;
    }

    /**
     * @param mixed $decission
     */
    public function setDecission($decission) {
        $this->decission = $decission;
    }

    /**
     * @param mixed $travailleMr
     */
    public function setTravailleMr($travailleMr) {
        $this->travailleMr = $travailleMr;
    }

    /**
     * @param mixed $travailleMadame
     */
    public function setTravailleMadame($travailleMadame) {
        $this->travailleMadame = $travailleMadame;
    }

    /**
     * @param mixed $subsideModif
     */
    public function setSubsideModif($subsideModif) {
        $this->subsideModif = $subsideModif;
    }

    /**
     * @param mixed $franchiseMme
     */
    public function setFranchiseMme($franchiseMme) {
        $this->franchiseMme = $franchiseMme;
    }

    /**
     * @param mixed $mrFranchise
     */
    public function setMrFranchise($mrFranchise) {
        $this->mrFranchise = $mrFranchise;
    }

    /**
     * @param mixed $enfant1Franchise
     */
    public function setEnfant1Franchise($enfant1Franchise) {
        $this->enfant1Franchise = $enfant1Franchise;
    }

    /**
     * @param mixed $enfant2Franchise
     */
    public function setEnfant2Franchise($enfant2Franchise) {
        $this->enfant2Franchise = $enfant2Franchise;
    }

    /**
     * @param mixed $enfant3Franchise
     */
    public function setEnfant3Franchise($enfant3Franchise) {
        $this->enfant3Franchise = $enfant3Franchise;
    }

    /**
     * @param mixed $enfant4Franchise
     */
    public function setEnfant4Franchise($enfant4Franchise) {
        $this->enfant4Franchise = $enfant4Franchise;
    }

    /**
     * @param mixed $habitation
     */
    public function setHabitation($habitation) {
        $this->habitation = $habitation;
    }

    /**
     * @param mixed $rdvPrie
     */
    public function setRdvPrie($rdvPrie) {
        $this->rdvPrie = $rdvPrie;
    }

    /**
     * @param mixed $cmkSIndiceContact
     */
    public function setCmkSIndiceContact($cmkSIndiceContact) {
        $this->cmkSIndiceContact = $cmkSIndiceContact;
    }

    /**
     * @param mixed $cmkSTelifConpose
     */
    public function setCmkSTelifConpose($cmkSTelifConpose) {
        $this->cmkSTelifConpose = $cmkSTelifConpose;
    }

    /**
     * @param mixed $cmkSfieldfDStartTreatment
     */
    public function setCmkSfieldfDStartTreatment($cmkSfieldfDStartTreatment) {
        $this->cmkSfieldfDStartTreatment = $cmkSfieldfDStartTreatment;
    }

    /**
     * @param mixed $cmkSfieldfDHTreatment
     */
    public function setCmkSfieldfDHTreatment($cmkSfieldfDHTreatment) {
        $this->cmkSfieldfDHTreatment = $cmkSfieldfDHTreatment;
    }

    /**
     * @param mixed $cmkSfieldfDTreatment
     */
    public function setCmkSfieldfDTreatment($cmkSfieldfDTreatment) {
        $this->cmkSfieldfDTreatment = $cmkSfieldfDTreatment;
    }

    /**
     * @param mixed $cmkSfieldfHTreatment
     */
    public function setCmkSfieldfHTreatment($cmkSfieldfHTreatment) {
        $this->cmkSfieldfHTreatment = $cmkSfieldfHTreatment;
    }

    /**
     * @param mixed $cmkSfieldfDHRacroche
     */
    public function setCmkSfieldfDHRacroche($cmkSfieldfDHRacroche) {
        $this->cmkSfieldfDHRacroche = $cmkSfieldfDHRacroche;
    }

    /**
     * @param mixed $cmkSfieldfDStartRacroche
     */
    public function setCmkSfieldfDStartRacroche($cmkSfieldfDStartRacroche) {
        $this->cmkSfieldfDStartRacroche = $cmkSfieldfDStartRacroche;
    }

    /**
     * @param mixed $cmkSfieldfHStartRacroche
     */
    public function setCmkSfieldfHStartRacroche($cmkSfieldfHStartRacroche) {
        $this->cmkSfieldfHStartRacroche = $cmkSfieldfHStartRacroche;
    }

    /**
     * @param mixed $cmkSfieldfDHStartRecallPlanned
     */
    public function setCmkSfieldfDHStartRecallPlanned($cmkSfieldfDHStartRecallPlanned) {
        $this->cmkSfieldfDHStartRecallPlanned = $cmkSfieldfDHStartRecallPlanned;
    }

    /**
     * @param mixed $cmkSfieldfDStartRecallPlanned
     */
    public function setCmkSfieldfDStartRecallPlanned($cmkSfieldfDStartRecallPlanned) {
        $this->cmkSfieldfDStartRecallPlanned = $cmkSfieldfDStartRecallPlanned;
    }

    /**
     * @param mixed $cmkSfieldfHStartRecallPlanned
     */
    public function setCmkSfieldfHStartRecallPlanned($cmkSfieldfHStartRecallPlanned) {
        $this->cmkSfieldfHStartRecallPlanned = $cmkSfieldfHStartRecallPlanned;
    }

    /**
     * @param mixed $cmkSfieldAppelDuration
     */
    public function setCmkSfieldAppelDuration($cmkSfieldAppelDuration) {
        $this->cmkSfieldAppelDuration = $cmkSfieldAppelDuration;
    }

    /**
     * @param mixed $cmkSfieldWaitingDuration
     */
    public function setCmkSfieldWaitingDuration($cmkSfieldWaitingDuration) {
        $this->cmkSfieldWaitingDuration = $cmkSfieldWaitingDuration;
    }

    /**
     * @param mixed $cmkSfieldAppelCommunicationDuration
     */
    public function setCmkSfieldAppelCommunicationDuration($cmkSfieldAppelCommunicationDuration) {
        $this->cmkSfieldAppelCommunicationDuration = $cmkSfieldAppelCommunicationDuration;
    }

    /**
     * @param mixed $cmkSfieldPostAppelDuration
     */
    public function setCmkSfieldPostAppelDuration($cmkSfieldPostAppelDuration) {
        $this->cmkSfieldPostAppelDuration = $cmkSfieldPostAppelDuration;
    }

    /**
     * @param mixed $cmkSfieldTreatmentDuration
     */
    public function setCmkSfieldTreatmentDuration($cmkSfieldTreatmentDuration) {
        $this->cmkSfieldTreatmentDuration = $cmkSfieldTreatmentDuration;
    }

    /**
     * @param mixed $cmkSfieldProductionDuration
     */
    public function setCmkSfieldProductionDuration($cmkSfieldProductionDuration) {
        $this->cmkSfieldProductionDuration = $cmkSfieldProductionDuration;
    }

    /**
     * @param mixed $cmkSfieldNameCompany
     */
    public function setCmkSfieldNameCompany($cmkSfieldNameCompany) {
        $this->cmkSfieldNameCompany = $cmkSfieldNameCompany;
    }

    /**
     * @param mixed $cmkSfieldNameFile
     */
    public function setCmkSfieldNameFile($cmkSfieldNameFile) {
        $this->cmkSfieldNameFile = $cmkSfieldNameFile;
    }

    /**
     * @param mixed $cmkSfieldQualificationM
     */
    public function setCmkSfieldQualificationM($cmkSfieldQualificationM) {
        $this->cmkSfieldQualificationM = $cmkSfieldQualificationM;
    }

    /**
     * @param mixed $cmkSfieldQualification
     */
    public function setCmkSfieldQualification($cmkSfieldQualification) {
        $this->cmkSfieldQualification = $cmkSfieldQualification;
    }

    /**
     * @param mixed $cmkSfieldQualificationCode
     */
    public function setCmkSfieldQualificationCode($cmkSfieldQualificationCode) {
        $this->cmkSfieldQualificationCode = $cmkSfieldQualificationCode;
    }

    /**
     * @param mixed $cmkSfieldComment
     */
    public function setCmkSfieldComment($cmkSfieldComment) {
        $this->cmkSfieldComment = $cmkSfieldComment;
    }

    /**
     * @param mixed $cmkSfieldNumImport
     */
    public function setCmkSfieldNumImport($cmkSfieldNumImport) {
        $this->cmkSfieldNumImport = $cmkSfieldNumImport;
    }

    /**
     * @param mixed $cmkSfieldNameImport
     */
    public function setCmkSfieldNameImport($cmkSfieldNameImport) {
        $this->cmkSfieldNameImport = $cmkSfieldNameImport;
    }

    /**
     * @param mixed $cmkSfieldDateImport
     */
    public function setCmkSfieldDateImport($cmkSfieldDateImport) {
        $this->cmkSfieldDateImport = $cmkSfieldDateImport;
    }

    /**
     * @param mixed $cmkSfieldAgentName
     */
    public function setCmkSfieldAgentName($cmkSfieldAgentName) {
        $this->cmkSfieldAgentName = $cmkSfieldAgentName;
    }

    /**
     * @param mixed $cmkSfieldAgentLogin
     */
    public function setCmkSfieldAgentLogin($cmkSfieldAgentLogin) {
        $this->cmkSfieldAgentLogin = $cmkSfieldAgentLogin;
    }

    /**
     * @param mixed $cmkSfieldAgentPost
     */
    public function setCmkSfieldAgentPost($cmkSfieldAgentPost) {
        $this->cmkSfieldAgentPost = $cmkSfieldAgentPost;
    }

    /**
     * @param mixed $cmkSfieldAgentIndex
     */
    public function setCmkSfieldAgentIndex($cmkSfieldAgentIndex) {
        $this->cmkSfieldAgentIndex = $cmkSfieldAgentIndex;
    }

    /**
     * @param mixed $cmkSfieldTentative1
     */
    public function setCmkSfieldTentative1($cmkSfieldTentative1) {
        $this->cmkSfieldTentative1 = $cmkSfieldTentative1;
    }

    /**
     * @param mixed $cmkSfieldTentative2
     */
    public function setCmkSfieldTentative2($cmkSfieldTentative2) {
        $this->cmkSfieldTentative2 = $cmkSfieldTentative2;
    }

    /**
     * @param mixed $cmkSfieldTentative3
     */
    public function setCmkSfieldTentative3($cmkSfieldTentative3) {
        $this->cmkSfieldTentative3 = $cmkSfieldTentative3;
    }

    /**
     * @param mixed $cmkSfieldTentative4
     */
    public function setCmkSfieldTentative4($cmkSfieldTentative4) {
        $this->cmkSfieldTentative4 = $cmkSfieldTentative4;
    }

    /**
     * @param mixed $cmkSfieldTentative5
     */
    public function setCmkSfieldTentative5($cmkSfieldTentative5) {
        $this->cmkSfieldTentative5 = $cmkSfieldTentative5;
    }

    /**
     * @param mixed $cmkSfieldTentative6
     */
    public function setCmkSfieldTentative6($cmkSfieldTentative6) {
        $this->cmkSfieldTentative6 = $cmkSfieldTentative6;
    }

    /**
     * @param mixed $cmkSfieldTentative7
     */
    public function setCmkSfieldTentative7($cmkSfieldTentative7) {
        $this->cmkSfieldTentative7 = $cmkSfieldTentative7;
    }

    /**
     * @param mixed $cmkSfieldTentative8
     */
    public function setCmkSfieldTentative8($cmkSfieldTentative8) {
        $this->cmkSfieldTentative8 = $cmkSfieldTentative8;
    }

    /**
     * @param mixed $cmkSfieldTentative9
     */
    public function setCmkSfieldTentative9($cmkSfieldTentative9) {
        $this->cmkSfieldTentative9 = $cmkSfieldTentative9;
    }

    /**
     * @param mixed $cmkSfieldTentative10
     */
    public function setCmkSfieldTentative10($cmkSfieldTentative10) {
        $this->cmkSfieldTentative10 = $cmkSfieldTentative10;
    }

    /**
     * @param mixed $cmkSfieldTentative11
     */
    public function setCmkSfieldTentative11($cmkSfieldTentative11) {
        $this->cmkSfieldTentative11 = $cmkSfieldTentative11;
    }

    /**
     * @param mixed $cmkSfieldTentative12
     */
    public function setCmkSfieldTentative12($cmkSfieldTentative12) {
        $this->cmkSfieldTentative12 = $cmkSfieldTentative12;
    }

    /**
     * @param mixed $cmkSfieldTentative13
     */
    public function setCmkSfieldTentative13($cmkSfieldTentative13) {
        $this->cmkSfieldTentative13 = $cmkSfieldTentative13;
    }

    /**
     * @param mixed $cmkSfieldTentative14
     */
    public function setCmkSfieldTentative14($cmkSfieldTentative14) {
        $this->cmkSfieldTentative14 = $cmkSfieldTentative14;
    }

    /**
     * @param mixed $cmkSfieldTentative15
     */
    public function setCmkSfieldTentative15($cmkSfieldTentative15) {
        $this->cmkSfieldTentative15 = $cmkSfieldTentative15;
    }

    /**
     * @param mixed $cmkSfieldTentative16
     */
    public function setCmkSfieldTentative16($cmkSfieldTentative16) {
        $this->cmkSfieldTentative16 = $cmkSfieldTentative16;
    }

    /**
     * @param mixed $cmkSfieldTentative17
     */
    public function setCmkSfieldTentative17($cmkSfieldTentative17) {
        $this->cmkSfieldTentative17 = $cmkSfieldTentative17;
    }

    /**
     * @param mixed $cmkSfieldTentative18
     */
    public function setCmkSfieldTentative18($cmkSfieldTentative18) {
        $this->cmkSfieldTentative18 = $cmkSfieldTentative18;
    }

    /**
     * @param mixed $cmkSfieldTentative19
     */
    public function setCmkSfieldTentative19($cmkSfieldTentative19) {
        $this->cmkSfieldTentative19 = $cmkSfieldTentative19;
    }

    /**
     * @param mixed $cmkSfieldTentative20
     */
    public function setCmkSfieldTentative20($cmkSfieldTentative20) {
        $this->cmkSfieldTentative20 = $cmkSfieldTentative20;
    }

    /**
     * @param mixed $cmkSfieldNameCommercial
     */
    public function setCmkSfieldNameCommercial($cmkSfieldNameCommercial) {
        $this->cmkSfieldNameCommercial = $cmkSfieldNameCommercial;
    }

    /**
     * @param mixed $cmkSfieldDateCommercial
     */
    public function setCmkSfieldDateCommercial($cmkSfieldDateCommercial) {
        $this->cmkSfieldDateCommercial = $cmkSfieldDateCommercial;
    }

    /**
     * @param mixed $cmkSfieldHMRdvCommercial
     */
    public function setCmkSfieldHMRdvCommercial($cmkSfieldHMRdvCommercial) {
        $this->cmkSfieldHMRdvCommercial = $cmkSfieldHMRdvCommercial;
    }

    /**
     * @param mixed $cmkSfieldHRdvCommercial
     */
    public function setCmkSfieldHRdvCommercial($cmkSfieldHRdvCommercial) {
        $this->cmkSfieldHRdvCommercial = $cmkSfieldHRdvCommercial;
    }

    /**
     * @param mixed $cmkSfieldMRdvCommercial
     */
    public function setCmkSfieldMRdvCommercial($cmkSfieldMRdvCommercial) {
        $this->cmkSfieldMRdvCommercial = $cmkSfieldMRdvCommercial;
    }

    /**
     * @param mixed $cmkSfieldObservationRdvCommercial
     */
    public function setCmkSfieldObservationRdvCommercial($cmkSfieldObservationRdvCommercial) {
        $this->cmkSfieldObservationRdvCommercial = $cmkSfieldObservationRdvCommercial;
    }

    /**
     * @param mixed $cmkSfieldStateRdvCommercial
     */
    public function setCmkSfieldStateRdvCommercial($cmkSfieldStateRdvCommercial) {
        $this->cmkSfieldStateRdvCommercial = $cmkSfieldStateRdvCommercial;
    }

    /**
     * @param mixed $cmkNameFile
     */
    public function setCmkNameFile($cmkNameFile) {
        $this->cmkNameFile = $cmkNameFile;
    }

    /**
     * @param mixed $cmkNameCommecial
     */
    public function setCmkNameCommecial($cmkNameCommecial) {
        $this->cmkNameCommecial = $cmkNameCommecial;
    }

    /**
     * @param mixed $cmkTakingDateCommecial
     */
    public function setCmkTakingDateCommecial($cmkTakingDateCommecial) {
        $this->cmkTakingDateCommecial = $cmkTakingDateCommecial;
    }

    /**
     * @param mixed $cmkRdvDateCommecial
     */
    public function setCmkRdvDateCommecial($cmkRdvDateCommecial) {
        $this->cmkRdvDateCommecial = $cmkRdvDateCommecial;
    }

    /**
     * @param mixed $cmkObservationCommecial
     */
    public function setCmkObservationCommecial($cmkObservationCommecial) {
        $this->cmkObservationCommecial = $cmkObservationCommecial;
    }

    /**
     * @param mixed $refContactCommecial
     */
    public function setRefContactCommecial($refContactCommecial) {
        $this->refContactCommecial = $refContactCommecial;
    }

    /**
     * @param mixed $telifCommecial
     */
    public function setTelifCommecial($telifCommecial) {
        $this->telifCommecial = $telifCommecial;
    }

    /**
     * @param mixed $postCommecial
     */
    public function setPostCommecial($postCommecial) {
        $this->postCommecial = $postCommecial;
    }

    /**
     * @param mixed $agentCommecial
     */
    public function setAgentCommecial($agentCommecial) {
        $this->agentCommecial = $agentCommecial;
    }

    /**
     * @param mixed $loginAgentCommecial
     */
    public function setLoginAgentCommecial($loginAgentCommecial) {
        $this->loginAgentCommecial = $loginAgentCommecial;
    }

    /**
     * @param mixed $qualificationCommecial
     */
    public function setQualificationCommecial($qualificationCommecial) {
        $this->qualificationCommecial = $qualificationCommecial;
    }

    /**
     * @param mixed $observationCommecial
     */
    public function setObservationCommecial($observationCommecial) {
        $this->observationCommecial = $observationCommecial;
    }

    /**
     * @param mixed $dateStartCommecial
     */
    public function setDateStartCommecial($dateStartCommecial) {
        $this->dateStartCommecial = $dateStartCommecial;
    }

    /**
     * @param mixed $dateEndCommecial
     */
    public function setDateEndCommecial($dateEndCommecial) {
        $this->dateEndCommecial = $dateEndCommecial;
    }

    /**
     * @param mixed $durationCommecial
     */
    public function setDurationCommecial($durationCommecial) {
        $this->durationCommecial = $durationCommecial;
    }

    /**
     * @param mixed $durationCallCommecial
     */
    public function setDurationCallCommecial($durationCallCommecial) {
        $this->durationCallCommecial = $durationCallCommecial;
    }

    /**
     * @param mixed $agentId
     */
    public function setAgentId($agentId) {
        $this->agentId = $agentId;
    }

    /**
     * @param mixed $customerId
     */
    public function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }
    
    function getModifiedAt() {
        return $this->modifiedAt;
    }

    function getCreatedAt() {
        return $this->createdAt;
    }

    function setModifiedAt($modifiedAt) {
        $this->modifiedAt = $modifiedAt;
    }

    function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    function getCreatedBy() {
        return $this->createdBy;
    }

    function getUpdatedBy() {
        return $this->updatedBy;
    }

    function setCreatedBy($createdBy) {
        $this->createdBy = $createdBy;
    }

    function setUpdatedBy($updatedBy) {
        $this->updatedBy = $updatedBy;
    }
    
    function getIsDouble() {
        return $this->isDouble;
    }

    function setIsDouble($isDouble) {
        $this->isDouble = $isDouble;
    }





}
